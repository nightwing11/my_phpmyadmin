
<!DOCTYPE html>
<html lang="fr">
<body>
	<div  class="formulaire_requete"> 
						<FORM method ="post" >
						<TEXTAREA name="req" rows="10" cols="50" value='req'></TEXTAREA>
						<button type="submit" name="execute" value="Excuter" >Executer</button> 
						</FORM>
						</div>
</body>
</html>

<?php
//gestion du  formulaire de requete sql 
if(isset($_POST['execute']) && $_POST['execute'] == 'Excuter')
{
	if(((isset($_POST['req']) && !empty($_POST['req']))))
	{
	
		try
		{
			// $db = new PDO('mysql:host=localhost;sql=' . $_GET["sql"] . ';', 'root', 'root');
			$db = new PDO('mysql:host=localhost;sql=' . $_GET["sql"] . ';', 'root', '');
 			$requete = $_POST['req'];
 			$q = $db->query($requete);

		}
		catch (PDOException $e) {
    	echo 'Echec de la connexion : ' . $e->getMessage();
    	exit;
		}
	
		if ($q == false)
		  echo "Erreur de Syntaxe";
		else 
 		while ($donnees = $q->fetch()) 
 		{
	    	echo '<li>' . $donnees[$count] . '</li> ' ;
			$nbDB++;
		}
	 echo '</br>';
 	}
 	else 
	{
 			echo "Champ vide";
 			echo '</br>';
 	}
}
?>
<?php

	//affichage des bases disponibles 
	echo 'Mes Bases:';
	try
	{

		// $db = new PDO('mysql:host=localhost;', 'root', 'root');
		$db = new PDO('mysql:host=localhost;', 'root', '');
 	
 	$q = $db->query('SHOW DATABASES');
	}
	catch (PDOException $e) {
    echo 'Echec de la connexion : ' . $e->getMessage();
    exit;
	}
 		while ($donnees = $q->fetch()) {
	    echo '<li><a href="dashboard.php?sql=' . $donnees[$count] . '">' . $donnees[$count] . '</a></li>';
		$nbDB++;
		}
 	


?>

