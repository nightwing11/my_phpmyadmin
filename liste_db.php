<?php
	// $db = new PDO('mysql:host=localhost;', 'root', 'root');
	$db = new PDO('mysql:host=localhost;', 'root', '');

	$q = $db->query('SHOW DATABASES');
	$count = 0;
	$nbDB = 0;

	while ($donnees = $q->fetch()) {
		echo '<li><a href="dashboard.php?dbname=' . $donnees[$count] . '">' . $donnees[$count] . '</a></li>';
		$nbDB++;
	}

	$q->closeCursor();
?>