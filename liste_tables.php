<?php
	//$db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', 'root');
	$db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', '');

	$req = $db->query("SHOW TABLES");

	echo '<ul>';

	while ($donnees = $req->fetch()) {
		echo '<li><a href="dashboard.php?dbname=' . $_GET["dbname"] . '&tablename=' . $donnees[$count] . '">' . $donnees[$count] . '</a></li>';
	}

	echo '</ul>';

	$req->closeCursor();
?>