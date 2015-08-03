<?php 

// $db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//partie php qui affiche et gére l'ajout d'un table et ses champs 
	$nb_col = ( isset($_POST['nb_col']) ) ? $_POST['nb_col'] : NULL;
	$table_name = ( isset($_POST['table_name']) ) ? $_POST['table_name'] : NULL;

    if(isset($table_name)) 
    {
         echo '<p> nom de la table : ' .$table_name. '</p>';
        for($i = 1; $i <= $nb_col; $i++) {
            echo '<input type="text" name="table_name".$i id="nb_col" placeholder="nom du champ" required>';
            echo '<select name="var" size="1">';
                echo '<option>Int</option>';
                echo '<option>Varchar</option>';
                echo '<option>Text</option>';
                echo '<option>Date</option>';
            echo '</select>';
            echo '<br>';
        } 

        $sql = "CREATE table $table_name(ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY);";

        $req = $db->exec($sql);

        if ($req === false)
            echo 'ERREUR : ', print_r($db->errorInfo());
    }
    else {

    //permet de lister les tables 
	// $db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	$db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

	$req = $db->query("SHOW TABLES");
    $nbLignes = (count($donnees) / 2);

    echo '<table>';
        echo '<th>Tables</th>';
        echo '<th>Action</th>';

        while ($donnees = $req->fetch()) {
            echo '<tr>';
            for ($i = 0; $i < $nbLignes; $i++) {
                echo '<td><a href="dashboard.php?dbname=' . $_GET["dbname"] . '&tablename=' . $donnees[$i] . '">' . $donnees[$i] . '</a></td>';
                // echo '<td><form action="supp_table.php?dbname=' . $_GET["dbname"] . '&tablename=' . $donnees[$i] . '" method="post"><input type="submit" id="btn_drop_table" value="Supprimer"></form></td>';
                echo '<td>';
                    echo '<a href="supp_table.php?dbname=' . $_GET["dbname"] . '&tablename=' . $donnees[$i] . '&action=vider" class="ope-actions">Vider</a>';
                    echo '<a href="supp_table.php?dbname=' . $_GET["dbname"] . '&tablename=' . $donnees[$i] . '&action=delete" class="ope-actions">Supprimer</a>';
                echo '</td>';
            }
            echo '</tr>';
        }

    echo '</table>';

    $req->closeCursor();
?>

<div class="add_new_table">
    <form method="post">
        <fieldset>
            <legend>Nouvelle table</legend>

            <label for="nb_col">Nom de la table : </label>
            <input type="text" name="table_name" id="nb_col" required>
            <label for="nb__col">Nombre de colonnes : </label>
            <input type="number" name="nb_col" id="nb__col" required>
            <input type="submit" name="add" value="Exécuter">
        </fieldset>
    </form>
</div>


<?php } ?>