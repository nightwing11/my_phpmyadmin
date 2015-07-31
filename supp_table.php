<?php
	$db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', 'root');
	//$db = new PDO('mysql:host=localhost;dbname=' . $_GET["dbname"] . ';', 'root', '');
echo "ok";
echo $_POST['$donnees[$count]'];



?>