<?php
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
	if ((isset($_POST['username']) && !empty($_POST['username'])) && (isset($_POST['password']) && !empty($_POST['password']))) {

if($_POST['username'] == "root" && $_POST['password'] == "root")
	{
		session_start();
		$_SESSION['username'] = $_POST['username'];
		echo '<SCRIPT LANGUAGE="JavaScript"> 
		document.location.href="dashboard.php?dbname=0"; 
	</SCRIPT>';
	exit();
	}
	else
		$erreur = 'Connexion impossible. (usage: root:root)';

	}
else
$erreur = 'Au moins un des champs est vide.';
}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<title>my_phpMyAdmin</title>
	</head>

	<body class="page_connexion">
		<div class="connexion_area">
		    <div class="inner">
                <h1>my_phpMyAdmin</h1>

                <div  class="formulaire_connexion">
                    <form action= "index.php" method="post">
                        <div class="form_elem">
                            <input type="text" name="username" placeholder="Username" value = "<?php if (isset($_POST['username'])) echo htmlentities(trim($_POST['Username'])); ?>" required>
                        </div><!--

                    --><div class="form_elem last-el">
                            <input type="password" name="password" placeholder="Password" value = "<?php if (isset($_POST['Password'])) echo htmlentities(trim($_POST['Password'])); ?>" required>
                        </div>
                        
                        <button type="submit" name="connexion" class="btn_connexion btn black" value = 'Connexion'>Se connecter</button>
                    </form>
                    <?php
                    if (isset($erreur)) echo '<br /><br />',$erreur;
                    ?>
                </div>
			</div>
		</div>

    	<script src="js/jquery-1.11.1.min.js"></script>
		<!-- <script src="//code.jquery.com/jquery-1.11.2.min.js"></script> -->
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>

  

