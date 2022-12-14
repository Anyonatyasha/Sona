<!DOCTYPE html>
<html lang="zxx">
<?php require $_SERVER['DOCUMENT_ROOT'] . '/parts/head.html' ?>
<link rel="stylesheet" href="css/style_for_table.css">
<body>
<!-- Page Preloder -->
<?php require $_SERVER['DOCUMENT_ROOT'] . '/parts/preloder.html' ?>
<!-- Offcanvas Menu Section Begin -->
<?php require $_SERVER['DOCUMENT_ROOT'] . '/parts/menu.html' ?>
<!-- Offcanvas Menu Section End -->
<!-- Header Section Begin -->
<?php require $_SERVER['DOCUMENT_ROOT'] . '/parts/header.html' ?>
<!-- Header End -->

<div class="col-xl-4 col-lg-4 offset-xl-2 offset-lg-2">
    <div class="review-add">
        <h3>Add room</h3>
        <form action="handler/rooms_create.php" class="ra-form" method="post">
            <div class="col-lg-12">
                <label for="name">Name:</label>
                <input name="name" type="text" class="name" id="name">
            </div>

            <div class="col-lg-12">
                <label for="price">Price:</label>
                <input name="price" type="text" class="price" id="price">
            </div>

            <div class="col-lg-12">
                <label for="size">Size:</label>
                <input name="size" type="text" class="size" id="size">
            </div>

            <div class="col-lg-12">
                <label for="capacity">Capacity:</label>
                <input name="capacity" type="text" class="capacity" id="capacity">
            </div>

            <div class="col-lg-12">
                <label for="bed">Bed:</label>
                <input name="bed" type="text" class="price" id="price">
            </div>

            <div class="col-lg-12">
                <label for="services">Services:</label>
                <input name="services" type="text" class="price" id="price">
            </div>
            <div class="col-lg-12">
                <label for="description">Description:</label>
                <textarea name="description"></textarea>
            </div>
            <button type="submit">add</button>
        </form>
    </div>
</div>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Price</th>
        <th>Size</th>
        <th>Capacity</th>
        <th>Bed</th>
        <th>Services</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <?php
    /** @var PDO $db */
    $db = require $_SERVER['DOCUMENT_ROOT'] . '/common/bd.php';

    $rooms = $db->query('SELECT * FROM rooms')
        ->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rooms as $room): ?>
        <tr>
            <td><?= $room['id']?></td>
            <td><?= $room['name']?></td>
            <td><?= $room['price']?></td>
            <td><?= $room['Size']?></td>
            <td><?= $room['Capacity']?></td>
            <td><?= $room['Bed']?></td>
            <td><?= $room['Services']?></td>
            <td><?= $room['description']?></td>
            <td><a href="/admin/form_update.php?id=<?= $room['id'] ?>">??????????????????????????</a>
                <a href="/handler/rooms_delete.php?id=<?= $room['id'] ?>">??????????????</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<footer class="footer-section">
    <div class="container">
        <div class="footer-text">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ft-about">
                        <div class="logo">
                            <a href="#">
                                <img src="img/footer-logo.png" alt="">
                            </a>
                        </div>
                        <p>We inspire and reach millions of travelers<br /> across 90 local websites</p>
                        <div class="fa-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-tripadvisor"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="ft-contact">
                        <h6>Contact Us</h6>
                        <ul>
                            <li>(12) 345 67890</li>
                            <li>info.colorlib@gmail.com</li>
                            <li>856 Cordia Extension Apt. 356, Lake, United State</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="ft-newslatter">
                        <h6>New latest</h6>
                        <p>Get the latest updates and offers.</p>
                        <form action="#" class="fn-form">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <ul>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Environmental Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="co-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search model Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
