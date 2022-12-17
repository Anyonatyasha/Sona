<?php

/** @var PDO $db */
$db = require $_SERVER['DOCUMENT_ROOT'] . '/common/bd.php';

$id = $_GET['id'];

$db->query("DELETE FROM rooms WHERE id = {$id}");

header('Location: /admin.php');