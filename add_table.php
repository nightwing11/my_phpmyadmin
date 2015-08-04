<?php

// RECUPERER LES DONNES
$db_name = htmlspecialchars($_POST["dbname"]);
$table_name = htmlspecialchars($_POST["table_name"]);

$nom_champ = htmlspecialchars($_POST["champ"]);
$datatype = htmlspecialchars($_POST["datatype"]);
$value = htmlspecialchars($_POST["value"]);
$null = ( isset($_POST["null"]) ) ? 'NULL' : 'NOT NULL';

// REQUETE QUI CREER LA TABLE
$create_table = "CREATE TABLE $table_name(ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY);";

// REQUETE QUI AJOUTE LES CHAMPS
$alter_table = "ALTER TABLE $table_name ADD $nom_champ $datatype( $value ) $null";

// FAIRE L'ENVOI DANS LA BASE DE DONNEES
// $con_db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$con_db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$ajoute_table = $con_db->exec($create_table);
$ajoute_champ = $con_db->exec($alter_table);
/* 

$req = $db->exec($sql);

if ($req === false)
echo "La table " . $table_name . " existe déjà !"; */