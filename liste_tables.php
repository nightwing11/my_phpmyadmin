<?php 

if (!isset($_POST["table_name"])) {

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
    <form method="post">
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


<?php } else {
    
    //partie php qui affiche et gére l'ajout d'un table et ses champs 
    $nb_col = ( isset($_POST['nb_col']) ) ? $_POST['nb_col'] : NULL;
    $table_name = ( isset($_POST['table_name']) ) ? $_POST['table_name'] : NULL;

    echo '<label>Nom de la table :</label>';
    echo '<input type="text" name="' . $table_name . '" id="' . $table_name . '" value="' . $table_name . '">';

    echo '<table>';
        echo '<th>Nom</th>';
        echo '<th>Type</th>';
        echo '<th>Taille/Valeurs</th>';
        echo '<th>Null</th>';
        echo '<th>A_I</th>';

        for($i = 1; $i <= $nb_col; $i++) {
        ?>
            <tr>
                <td><input type="text" name="champ<?php print $i; ?>" id="champ<?php print $i; ?>"></td>
                <td><select name="datatype" id="datatype">
                    <option value="int">INT</option>
                    <option value="varchar">VARCHAR</option>
                    <option value="text">TEXT</option>
                    <option value="date">DATE</option>
                </select></td>
                <td><input type="text" name="value" id="value"></td>
                <td><input type="checkbox" name="null" id="null"></td>
                <td><input type="checkbox" name="auto_increment" id="auto_increment"></td>
            </tr>
        <?php }
    echo '</table>';
    
}