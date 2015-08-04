<?php

$dbname = htmlspecialchars($_GET["dbname"]);
$tablename = htmlspecialchars($_GET["tablename"]);

// $struct_db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$struct_db = new PDO('mysql:host=localhost;dbname=' . $dbname . ';', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

if ( !isset($_GET["action"]) ) {

    $describe_table = "DESCRIBE $tablename";
    $rep_describe = $struct_db->query($describe_table);

    echo '<table>';
        echo '<th>Champ</th>';
        echo '<th>Type/Valeur</th>';
        echo '<th>Null</th>';
        echo '<th>Action</th>';

        while ($data = $rep_describe->fetchAll()) {    

            $nb_datas = count($data);
            for ( $a = 0; $a < $nb_datas; $a++ ) {
                echo '<tr>';
                    echo '<td>' . $data[$a][0] . '</td>';
                    echo '<td>' . $data[$a][1] . '</td>';
                    echo '<td>' . $data[$a][2] . '</td>';
                    echo '<td>';
                        echo '<a href="dashboard.php?dbname=' . $dbname . '&tablename=' . $tablename . '&structure=0&action=modifier" class="ope-actions">Modifier</a>';
                        echo '<a href="dashboard.php?dbname=' . $dbname . '&tablename=' . $tablename . '&structure=0&action=supprimer" class="ope-actions">Supprimer</a>';
                    echo'</td>';
                echo '</tr>';
            }

        }

    echo '</table>';

    $rep_describe->closeCursor();

}

if ( isset($_GET["action"]) && $_GET["action"] == "modifier" ) {
    echo 'Faire le formulaire de modification';
}

if ( isset($_GET["action"]) && $_GET["action"] == "supprimer" ) {
    echo 'Faire le formulaire de suppression';
}