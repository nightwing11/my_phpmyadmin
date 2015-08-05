<?php
$db = new PDO('mysql:host=localhost;', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// $db = new PDO('mysql:host=localhost;', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$q = $db->query('CREATE DATABASE ' . htmlspecialchars($_POST["new_db"]) .'');
$q->closeCursor();

header('Location: dashboard.php?dbname=0');
?>