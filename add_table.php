<?php

// RECUPERER LES DONNES
$db_name = htmlspecialchars($_POST["dbname"]);
$table_name = htmlspecialchars($_POST["table_name"]);
$nb_col = htmlspecialchars($_POST["nbcol"]);

// $con_db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$con_db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// REQUETE QUI CREER LA TABLE
$create_table = "CREATE TABLE $table_name(ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY);";
$ajoute_table = $con_db->exec($create_table);

if ($ajoute_table === false) {
    echo '<script>alert("La table existe déjà !")</script>';
    echo '<a href="dashboard.php?dbname=' . $db_name . '">Revenir en arrière</a>';
} else {
    
    // REQUETE QUI AJOUTE LES CHAMPS
    for ($i = 1; $i < $nb_col + 1; $i++) {
        $nom_champ = htmlspecialchars($_POST["champ$i"]);
        $datatype = htmlspecialchars($_POST["datatype$i"]);
        $value = htmlspecialchars($_POST["value$i"]);
        $null = ( isset($_POST["null$i"]) ) ? 'NULL' : 'NOT NULL';

        $alter_table = "ALTER TABLE $table_name ADD $nom_champ $datatype( $value ) $null";
        $ajoute_champ = $con_db->exec($alter_table);
    }
    header('Location: dashboard.php?dbname=' . $db_name . '');
    
}