<?php
$texte_requete = htmlspecialchars($_POST["request"]);

if (!isset($_GET["dbname"])) {
    // $db = new PDO('mysql:host=localhost;', 'root', 'root');
	$db = new PDO('mysql:host=localhost;', 'root', '');

	$q = $db->query($texte_requete);
	$q->closeCursor();

	header('Location: dashboard.php?sql=0');
}
?>