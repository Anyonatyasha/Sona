<?php
/** @var PDO $db */
$db = require $_SERVER['DOCUMENT_ROOT'] . '/common/bd.php';
var_dump($_POST);

$date_in = $_POST['date_in'];
$date_out=$_POST['date_out'];
$guests = $_POST['guest'];
$room=$_POST['room'];
$id=$_POST['id_r'];

$to = "alena2002ya@gmail.com";
$tema = "бронирование комнаты";
$message = "Дата въезда ".$_POST['date_in']."<br>";
$message .= "дата выезда ".$_POST['date_out']."<br>";
$message .= "кол-во гостей ".$_POST['guest']."<br>";
$message .= "комната ".$_POST['room']."<br>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($to, $tema, $message, $headers);

$db->query("INSERT INTO reservations (check_in,check_out, guests, room, rooms_id) VALUES ('{$date_in}','{$date_out}', '{$guests}','{$room}','{$id}')");
header('Location: /room-details.php?id='.$id);
