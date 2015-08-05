<?php
    $db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	// $db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

    if ( isset($_GET["action"]) ) {
        
        if ($_GET["action"] == 'delete')
            $del_table = $db->exec('DROP TABLE ' . $_GET["tablename"] . '');
        else if ($_GET["action"] == 'vider')
            $vide_table = $db->exec('TRUNCATE TABLE ' . $_GET["tablename"] . '');
        
    }
    
    header('Location: dashboard.php?dbname=' . $_GET["dbname"] . '');
?>