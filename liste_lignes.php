<?php
//$base = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', 'root');
$base = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', '');

$request = $base->query('SELECT * FROM ' . $_GET["tablename"] . '');
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