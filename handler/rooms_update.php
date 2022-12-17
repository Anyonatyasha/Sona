<?php
/** @var PDO $db */
$db = require $_SERVER['DOCUMENT_ROOT'] . '/common/bd.php';

$id=$_POST['id'];

$name = $_POST['names'];
$price = $_POST['price'];
$size = $_POST['size'];
$capacity = $_POST['capacity'];
$bed = $_POST['bed'];
$services = $_POST['services'];
$description = $_POST['description'];

$db->query("UPDATE rooms SET name='{$name}', price='{$price}', Size='{$size}', Capacity='{$capacity}', Bed='{$bed}', Services='{$services}', description='{$description}' WHERE rooms.id = {$id}");
header('Location: /admin.php');