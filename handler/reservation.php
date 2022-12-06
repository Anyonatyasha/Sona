<?php
/** @var PDO $db */
$db = require $_SERVER['DOCUMENT_ROOT'] . '/common/bd.php';
var_dump($_POST);

$date_in = $_POST['date_in'];
$date_out=$_POST['date_out'];
$guests = $_POST['guest'];
$room=$_POST['room'];
$id=$_POST['id_r'];

$db->query("INSERT INTO reservations (check_in,check_out, guests, room, rooms_id) VALUES ('{$date_in}','{$date_out}', '{$guests}','{$room}','{$id}')");
header('Location: /room-details.php?id='.$id);
