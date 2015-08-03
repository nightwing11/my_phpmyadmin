<?php
$texte_requete = htmlspecialchars($_POST["request"]);

if (!isset($_GET["dbname"])) {
    // $db = new PDO('mysql:host=localhost;', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	$db = new PDO('mysql:host=localhost;', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

	$q = $db->query($texte_requete);
	$q->closeCursor();

	header('Location: dashboard.php?sql=0');
}
?>