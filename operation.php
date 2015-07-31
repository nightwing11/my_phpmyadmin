<?php
/* Création d'une table */
if (isset($_POST["nom_table"])) {
	$db = new PDO('mysql:host=localhost;dbname='. $_POST["dbname"] .';', 'root', '');
	// $db = new PDO('mysql:host=localhost;dbname='. $_POST["dbname"] .';', 'root', 'root');

	$q = $db->query('CREATE TABLE ' . htmlspecialchars($_POST["nom_table"]) . '');
	// Ajouter des champs pour mettre des colonnes
	$q->closeCursor();
	header('Location: dashboard.php?dbname='. $_POST["dbname"] .'&ope=0');
}

/* Rename bdd */
if (isset($_POST["nom_db"])) {
	$base = new PDO('mysql:host=localhost;dbname='. $_POST["dbname"] .';', 'root', '');
	// $base = new PDO('mysql:host=localhost;dbname='. $_POST["dbname"] .';', 'root', 'root');

	$query = $base->query(''); // UPDATE ?
	$query->closeCursor();

	header('Location: dashboard.php?dbname='. $_POST["dbname"] .'&ope=0');
}

/* Drop bdd */
if (isset($_POST["drop_db"])) {
	$database = new PDO('mysql:host=localhost;', 'root', '');
	// $database = new PDO('mysql:host=localhost;', 'root', 'root');

	$requete = $database->query($_POST["drop_db"]);
	$requete->closeCursor();
	
	header('Location: dashboard.php?dbname=0');
}
?>