<?php
$base = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', 'root');

$request = $base->query('SELECT * FROM ' . $_GET["tablename"] . '');
$donnees = $request->fetch();

$nbLignes = (count($donnees) / 2);

/* $nbLignesReel = $donnees[0];
if ($nbLignesReel == "")
	echo 'La table "' . $_GET["tablename"] . '" ne contient pas de lignes !'; */

echo '<table>';

while ($donnees = $request->fetch()) {
	echo '<tr>';
	for ($i = 0; $i < $nbLignes; $i++)
		echo '<td>' . $donnees[$i] . '</td>';
	echo '</tr>';
}

echo '</table>';

$request->closeCursor();
?>