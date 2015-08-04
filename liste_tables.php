<?php 

    //permet de lister les tables 
	// $db = new PDO('mysql:host=localhost;dbname=' . htmlspecialchars($_GET["dbname"]) . ';', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	$db = new PDO('mysql:host=localhost;dbname=' . htmlspecialchars($_GET["dbname"]) . ';', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

	$req = $db->query("SHOW TABLES");
    $nbLignes = (count($donnees) / 2);

    echo '<table>';
        echo '<th>Tables</th>';
        echo '<th>Action</th>';

        while ($donnees = $req->fetch()) {
            echo '<tr>';
            for ($i = 0; $i < $nbLignes; $i++) {
                echo '<td><a href="dashboard.php?dbname=' . htmlspecialchars($_GET["dbname"]) . '&tablename=' . $donnees[$i] . '">' . $donnees[$i] . '</a></td>';
                // echo '<td><form action="supp_table.php?dbname=' . htmlspecialchars($_GET["dbname"]) . '&tablename=' . $donnees[$i] . '" method="post"><input type="submit" id="btn_drop_table" value="Supprimer"></form></td>';
                echo '<td>';
                    echo '<a href="supp_table.php?dbname=' . htmlspecialchars($_GET["dbname"]) . '&tablename=' . $donnees[$i] . '&action=vider" class="ope-actions btn-vider">Vider</a>';
                    echo '<a href="supp_table.php?dbname=' . htmlspecialchars($_GET["dbname"]) . '&tablename=' . $donnees[$i] . '&action=delete" class="ope-actions">Supprimer</a>';
                echo '</td>';
            }
            echo '</tr>';
        }

    echo '</table>';

    $req->closeCursor();
?>

<div class="add_new_table">
    <form action="add_table.php" method="post">
        <fieldset>
            <legend>Nouvelle table</legend>

            <label for="nb_col">Nom de la table : </label>
            <input type="text" name="table_name" id="nb_col" required>
            <label for="nb__col">Nombre de colonnes : </label>
            <input type="number" name="nb_col" id="nb__col" value="4" required>
            <input type="hidden" name="dbname" id="dbname" value="<?php print htmlspecialchars($_GET["dbname"]); ?>" >
            <input type="submit" name="add" value="Exécuter">
        </fieldset>
    </form>
</div>