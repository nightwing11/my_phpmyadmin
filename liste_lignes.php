<?php
    $base = new PDO('mysql:host=localhost;dbname=' . htmlspecialchars($_GET["dbname"]) . ';', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// $base = new PDO('mysql:host=localhost;dbname=' . htmlspecialchars($_GET["dbname"]) . '', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$request = $base->query('SELECT * FROM ' . htmlspecialchars($_GET["tablename"] . ''));
$donnees = $request->fetch();
$totalColumns = $request->columnCount();

$nbLignes = (count($donnees) / 2);

echo '<table>';

for ( $j = 0; $j < $totalColumns; $j++ ) {
    $meta = $request->getColumnMeta($j);
    $column[] = $meta['name'];
    echo '<th>' . $column[$j] .'</th>';
}

while ($donnees = $request->fetch()) {
	echo '<tr>';
	for ($i = 0; $i < $nbLignes; $i++)
		echo '<td>' . $donnees[$i] . '</td>';
	echo '</tr>';
}

echo '</table>';

$request->closeCursor();
?>