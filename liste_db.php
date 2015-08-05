<?php
	$db = new PDO('mysql:host=localhost;', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	// $db = new PDO('mysql:host=localhost;', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

	$q = $db->query('SHOW DATABASES');
	$count = 0;
	$nbDB = 0;

	while ($donnees = $q->fetch()) {
		echo '<li><a href="dashboard.php?dbname=' . $donnees[$count] . '">' . $donnees[$count] . '</a></li>';
		$nbDB++;
	}

	$q->closeCursor();
?>