<?php
/** @var PDO $db */
$db = require $_SERVER['DOCUMENT_ROOT'] . '/common/bd.php';

$date_in = $_POST['date_in'];
$date_out=$_POST['date_out'];
$guests = $_POST['guest'];
$room=$_POST['room'];

$db->query("INSERT INTO reservation (check_in,check_out, guests, room) VALUES ('{$date_in}','{$date_out}', '{$guests}','{$room}')");

