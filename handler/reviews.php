<?php
/** @var PDO $db */
$db = require $_SERVER['DOCUMENT_ROOT'] . '/common/bd.php';

$name = $_POST['name'];
$email=$_POST['email'];
$text = $_POST['text'];
$id=$_POST['id'];

$db->query("INSERT INTO reviews (author,email, reviews,rooms_id) VALUES ('{$name}','{$email}', '{$text}','{$id}')");
header('Location: /room-details.php?id='.$id);
