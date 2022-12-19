<?php
/** @var PDO $db */
$db = require $_SERVER['DOCUMENT_ROOT'] . '/common/bd.php';
var_dump($_POST);
 $name=$_POST['name'];
 $mail=$_POST['mail'];
 $mess=$_POST['message'];

$to = "alena2002ya@gmail.com";
$tema = "контакты";
$message = "Имя".$_POST['name']."<br>";
$message .= "Mail".$_POST['mail']."<br>";
$message .= "Сообщение".$_POST['message']."<br>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($to, $tema, $message, $headers);
$db->query("INSERT INTO contacts (name,email, message) VALUES ('{$name}','{$mail}', '{$mess}')");
header('Location: /contact.php');
