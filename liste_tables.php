<?php
	$db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', 'root');
	//$db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', '');

	$req = $db->query("SHOW TABLES");

	echo '<ul>';

	while ($donnees = $req->fetch()) {
		echo '<li><a href="dashboard.php?dbname=' . $_GET["dbname"] . '&tablename=' . $donnees[$count] . '">' . $donnees[$count] . '</a></li>';
	}

	echo '</ul>';

	$req->closeCursor();
?>

   <form action="add_table.php" method="post">
         <legend>Nouvelle table: </legend>
        <input type="text" name="table_name" id="nb_col" placeholder="nom de la table" required>
        <input type="number" name="nb_col" id="nb__col" placeholder="nombre de colonnes" required>
        <input type="submit" name="creer" value="Exécuter">
   </form>