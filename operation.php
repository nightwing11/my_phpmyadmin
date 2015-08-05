<?php
/* Création d'une table */
if (isset($_POST["nom_table"])) {
    // $db = new PDO('mysql:host=localhost;dbname='. htmlspecialchars($_POST["dbname"]) .';', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	$db = new PDO('mysql:host=localhost;dbname='. htmlspecialchars($_POST["dbname"]) .';', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

	$q = $db->query('CREATE TABLE ' . htmlspecialchars($_POST["nom_table"]) . '');
	// Ajouter des champs pour mettre des colonnes
	$q->closeCursor();
	header('Location: dashboard.php?dbname='. htmlspecialchars($_POST["dbname"]) .'&ope=0');
}

/* Rename bdd */
if (isset($_POST["nom_db"])) {
	// $base = new PDO('mysql:host=localhost;dbname='. htmlspecialchars($_POST["dbname"]) .';', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $base = new PDO('mysql:host=localhost;dbname='. htmlspecialchars($_POST["dbname"]) .';', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

	$query = $base->query(''); // UPDATE ?
	$query->closeCursor();

	header('Location: dashboard.php?dbname='. htmlspecialchars($_POST["dbname"]) .'&ope=0');
}

/* Drop bdd */
if (isset($_POST["drop_db"])) {
	// $database = new PDO('mysql:host=localhost;', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $database = new PDO('mysql:host=localhost;', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

	$requete = $database->query(htmlspecialchars($_POST["drop_db"]));
	$requete->closeCursor();
	
	header('Location: dashboard.php?dbname=0');
}
?>