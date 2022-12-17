<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/handler/rooms_update.php" method="POST">
    <?php
    /** @var PDO $db */
    $db = require $_SERVER['DOCUMENT_ROOT'] . '/common/bd.php';

    $id = $_GET['id'];

    $room = $db->query("SELECT * FROM rooms WHERE id = {$id}")
        ->fetch(PDO::FETCH_ASSOC);
    ?>
    <input type="hidden" name="id" value="<?= $room['id'] ?>">
    <input type="text" name="names" placeholder="name" value="<?= $room['names'] ?? '' ?>">
    <input type="number" name="price" placeholder="price" value="<?= $room['price'] ?? '' ?>">
    <input type="text" name="size" placeholder="size" value="<?= $room['size'] ?? '' ?>">
    <input type="text" name="capacity" placeholder="capacity" value="<?= $room['capacity'] ?? '' ?>">
    <input type="text" name="bed" placeholder="bed" value="<?= $room['bed'] ?? '' ?>">
    <input type="text" name="services" placeholder="services" value="<?= $room['services'] ?? '' ?>">
    <input type="text" name="description" placeholder="description" value="<?= $room['description'] ?? '' ?>">

    <input type="submit" value="Сохранить">
    <?php ?>
</form>
</body>
</html>
<!--require '/admin/form.php';-->