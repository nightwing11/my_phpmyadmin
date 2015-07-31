<?php
$db = new PDO('mysql:host=localhost;', 'root', 'root');

$q = $db->query('CREATE DATABASE ' . htmlspecialchars($_POST["new_db"]) .'');
$q->closeCursor();

header('Location: dashboard.php?dbname=0');
?>