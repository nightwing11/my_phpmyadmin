<?php

$dbname = htmlspecialchars($_GET["dbname"]);
$tablename = htmlspecialchars($_GET["tablename"]);

// $struct_db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$struct_db = new PDO('mysql:host=localhost;dbname=' . $dbname . ';', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$describe_table = "DESCRIBE $tablename";
$rep_describe = $struct_db->query($describe_table);

echo '<table>';
    echo '<th>Field</th>';
    echo '<th>Type</th>';
    echo '<th>Null</th>';

    while ($data = $rep_describe->fetchAll()) {    
        
        $nb_datas = count($data);
        for ( $a = 0; $a < $nb_datas; $a++ ) {
            echo '<tr>';
                echo '<td>' . $data[$a][0] . '</td>';
                echo '<td>' . $data[$a][1] . '</td>';
                echo '<td>' . $data[$a][2] . '</td>';
            echo '</tr>';
        }

    }

echo '</table>';

$rep_describe->closeCursor();