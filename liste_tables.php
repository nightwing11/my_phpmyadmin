<?php
	$db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', 'root');
	//$db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', '');

	$req = $db->query("SHOW TABLES");

	echo '<ul>';

	while ($donnees = $req->fetch()) {
		echo '<form action="supp_table.php" method="post"><li><a href="dashboard.php?dbname=' . $_GET["dbname"] . '&tablename=' . $donnees[$count] . '">' . $donnees[$count] .  '</a><input type="hidden" name="$donnees[$count]"/><input type="submit" value="Supprimer"></li></form>';
	}

	echo '</ul>';

	$req->closeCursor();
?>

<form method="post">
         <legend>Nouvelle table: </legend>
        <input type="text" name="table_name" id="nb_col" placeholder="nom de la table" required>
        <input type="number" name="nb_col" id="nb__col" placeholder="nombre de colonnes" required>
        <input type="submit" name="add" value="Exécuter">
 </form>

<?php 

$nb__col = $_POST['nb_col'];
$table_name = $_POST['table_name'];
echo "debut";
for($i = 1; $i <= $nb_col; $i++) {

	echo $i;
echo '<input type="text" name="table_name".$i id="nb_col" placeholder="nom de la table" required>'; 
} 

?>