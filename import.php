<?php

 header('Location:dashboard.php?importer=0');
// connexion à la base 
    try {
            // $cnx = new PDO('mysql:host=localhost;', 'root', 'root', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
      		$cnx = new PDO('mysql:host=localhost;', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
     	}
    catch (PDOException $dbex) {
     	   die("Erreur de connexion : " . $dbex->getMessage() );
      	}

    //variable fichier d'uplaod
    $target_dir = "uploads/"; // dossier d'uplaoads
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    //taille du fichier
    if ($_FILES["file"]["size"] > 2048000) {
        echo "Désolé ton fichier est trop grand</br>";
        $uploadOk = 0;
    }

    //vérifie le format du fichier 
    if($imageFileType != "gzip" && $imageFileType != "bzip2" && $imageFileType != "zip"
    	 && $imageFileType != "sql" ) {
         echo "Seulement gzip, bzip2, zip & sql sont autorisés.</br>";
        $uploadOk = 0;
    }

    //Upload 
    if ($uploadOk == 0) {
        echo "Désolé, votre fichier ne s'est pas chargé </br>";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "Le fichier ". basename( $_FILES["file"]["name"]). " s'est chargé </br>";
        } else {
            echo "</br>Erreur de chargement du fichier ";
        }
    }

    //le nom du fichier 
    $filename = $_FILES["file"]["name"];

    $monfichier = '';

    //ouverture du fichier et lecture 
    $monfichier = file_get_contents("uploads/$filename");


      if($monfichier == false)
        echo "</br> erreur de lecture";
      else 
         {   
            $res = $cnx->exec($monfichier);
            if($res == false) 
                {
                        echo "</br>\nPDO::errorInfo():\n";
                        print_r($cnx->errorInfo());
                }
              else  {
                    echo "</br>la requete s'est exécuté avec succès";
                  
              }
         }

     //on ferme tout
    close($monfichier);
    $cnx->closeCursor();
?>
