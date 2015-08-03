
<form method="post">
         <legend>Nouvelle table: </legend>
        <input type="text" name="table_name" id="nb_col" placeholder="nom de la table" required>
        <input type="number" name="nb_col" id="nb__col" placeholder="nombre de colonnes" required>
        <input type="submit" name="add" value="Exécuter">
 </form>

<?php 

// $db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', 'root');
$db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', '');

//partie php qui affiche et gére l'ajout d'un table et ses champs 
	$nb_col = ( isset($_POST['nb_col']) ) ? $_POST['nb_col'] : NULL;
	$table_name = ( isset($_POST['table_name']) ) ? $_POST['table_name'] : NULL;
if(isset($table_name)) 
{
	 echo '<p> nom de la table :'.$table_name.'</p>';
	for($i = 1; $i <= $nb_col; $i++) {
		echo '<input type="text" name="table_name".$i id="nb_col" placeholder="nom du champ" required> <SELECT name="var" size="1">
			<OPTION>Int
			<OPTION>Varchar
			<OPTION>Text
			<OPTION>Date
			</SELECT></br>'; 
	} 

	$sql = "CREATE table $table_name(
     ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY);";

	$req = $db->exec($sql);
	
	if ($req === false)
    echo 'ERREUR : ', print_r($db->errorInfo());
	else
    echo 'table creer';
}

//permet de lister les tables 
	// $db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', 'root');
	$db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', '');

	$req = $db->query("SHOW TABLES");
    $totalColumns = $req->columnCount();
    $nbLignes = (count($donnees) / 2);

    echo '<table>';

    for ( $j = 0; $j < $totalColumns; $j++ ) {
        $meta = $req->getColumnMeta($j);
        $column[] = $meta['name'];
        echo '<th>' . $column[$j] .'</th>';
    }

    while ($donnees = $req->fetch()) {
        echo '<tr>';
        for ($i = 0; $i < $nbLignes; $i++)
            echo '<td>' . $donnees[$i] . '</td>';
            echo '<td><form action="supp_table.php" method="post"><input type="submit" value="Supprimer"></form></td>';
        echo '</tr>';
    }

    echo '</table>';

	/* echo '<ul>';

	while ($donnees = $req->fetch()) {
		echo '<form action="supp_table.php" method="post"><li><a href="dashboard.php?dbname=' . $_GET["dbname"] . '&tablename=' . $donnees[$count] . '">' . $donnees[$count] .  '</a><input type="hidden" name="$donnees[$count]"/><input type="submit" value="Supprimer"></li></form>';
	}

	echo '</ul>'; */

	$req->closeCursor();
?>



