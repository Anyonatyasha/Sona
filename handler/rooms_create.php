<?php
/** @var PDO $db */
$db = require $_SERVER['DOCUMENT_ROOT'] . '/common/bd.php';
var_dump($_POST);

$name = $_POST['name'];
$price = $_POST['price'];
$size = $_POST['size'];
$capacity = $_POST['capacity'];
$bed = $_POST['bed'];
$services = $_POST['services'];
$description = $_POST['description'];

$db->query("INSERT INTO rooms (name, price, Size, Capacity, Bed, Services, description) VALUES ('{$name}', '{$price}', '{$size}', '{$capacity}', '{$bed}', '{$services}', '{$description}')");
header('Location: /rooms.php');