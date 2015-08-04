<?php


// $db = new PDO('mysql:host=localhost;dbname=' . htmlspecialchars($_POST["dbname"]) . ';', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$db = new PDO('mysql:host=localhost;dbname=' . htmlspecialchars($_POST["dbname"]) . ';', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//partie php qui affiche et gére l'ajout d'un table et ses champs 
$nb_col = ( isset($_POST['nb_col']) ) ? $_POST['nb_col'] : NULL;
$table_name = ( isset($_POST['table_name']) ) ? $_POST['table_name'] : NULL;

echo '<label for="' . $table_name . '">Nom de la table :</label>';
echo '<input type="text" name="' . $table_name . '" id="' . $table_name . '" value="' . $table_name . '">';

echo '<table>';
    echo '<th>Nom</th>';
    echo '<th>Type</th>';
    echo '<th>Taille/Valeurs</th>';

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
        </tr>
    <?php }
echo '</table>';

/* $sql = "CREATE table $table_name(ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY);";

$req = $db->exec($sql);

if ($req === false)
echo "La table " . $table_name . " existe déjà !"; */

    /* echo '<input type="text" name="table_name' . $i . '" id="nb_col" placeholder="nom du champ" required>';
    echo '<select name="var" size="1">';
        echo '<option>Int</option>';
        echo '<option>Varchar</option>';
        echo '<option>Text</option>';
        echo '<option>Date</option>';
    echo '</select>';
    echo '<br>'; */