<?php
/** @var PDO $db */
$db = require $_SERVER['DOCUMENT_ROOT'] . '/common/bd.php';
var_dump($_POST);

$date_in = $_POST['date_in'];
$date_out=$_POST['date_out'];
$guests = $_POST['guest'];
$rooms=$_POST['rooms']; //колво комнат
$room=$_POST['room']; //id

$db->query("INSERT INTO reservations (check_in, check_out, guests, room, rooms_id) VALUES ('{$date_in}','{$date_out}', '{$guests}','{$rooms}','{$room}')");
header('Location: /index.php');