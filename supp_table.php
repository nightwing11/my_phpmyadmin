<?php
	// $db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', 'root');
	$db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', '');

    $del_table = $db->exec('DROP TABLE ' . $_GET["tablename"] . '');
    
    header('Location: dashboard.php?dbname=' . $_GET["dbname"] . '');
?>