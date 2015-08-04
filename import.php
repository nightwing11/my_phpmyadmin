<?php

    try {
      		$cnx = new PDO('mysql:host=localhost;', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
      		//$cnx = new PDO('mysql:host=localhost;', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
     	}
    catch (PDOException $dbex) {
     	   die("Erreur de connexion : " . $dbex->getMessage() );
      	}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    //taille du fichier
    if ($_FILES["file"]["size"] > 2048000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    //vérifie le format du fichier 
    if($imageFileType != "gzip" && $imageFileType != "bzip2" && $imageFileType != "zip"
    	 && $imageFileType != "sql" ) {
         echo "Sorry, only gzip, bzip2, zip & sql files are allowed.";
        $uploadOk = 0;
    }
    echo $uploadOk;
    //Upload 
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }



// on exécute
$cnx->exec($tonfichier);
?>
