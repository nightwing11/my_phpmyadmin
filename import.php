<?php

try {
  		$cnx = new PDO('mysql:host=localhost;', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
 	}
catch (PDOException $dbex) {
 	   die("Erreur de connexion : " . $dbex->getMessage() );
  	}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST["uploder"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
 }

//taille du fichier
if ($_FILES["fileToUpload"]["size"] > 2048) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
 }
echo $imageFileType;
// le format 
 //if($imageFileType != "gzip" && $imageFileType != "bzip2" && $imageFileType != "zip"
	//&& $imageFileType != "sql" ) {
    //echo "Sorry, only gzip, bzip2, zip & sql files are allowed.";
    //$uploadOk = 0;
//}



// on exécute
$cnx->exec($tonfichier);
?>
