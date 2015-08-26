<?php
session_start();
if (!isset($_SESSION['username'])) {
	header ('Location: index.php');
	exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<title>my_phpMyAdmin - Dashboard</title>
		
	</head>

	<body id="dashboard">
		<header>
			<div class="titre">
				<h1><a href="dashboard.php">my_phpMyAdmin</a></h1>
			</div><!--

		--><div class="navigation">
				<nav>
					<ul>
						<li><a href="dashboard.php?dbname=0">Bases de données</a></li>
						<?php
							if (isset($_GET["tablename"]))
								echo '<li><a href="dashboard.php?dbname=' . $_GET["dbname"] . '&tablename=' . $_GET["tablename"] . '&structure=0">Structure</a></li>';
						?>
						<li><a href="dashboard.php?sql=0">SQL</a></li>
						<li><a href="dashboard.php?importer=0">Importer</a></li>
						<?php
							if (isset($_GET["dbname"]) && ($_GET["dbname"] != "information_schema") &&
															($_GET["dbname"] != "mysql") &&
															($_GET["dbname"] != "performance_schema") &&
															($_GET["dbname"] != "") &&
															($_GET["dbname"] != "0"))
								echo '<li><a href="dashboard.php?dbname=' . $_GET["dbname"] . '&ope=0">Opérations</a></li>';
						?>
						<li><a href="deconnexion.php">Se déconnecter</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<div class="site-container">
			<div class="liste-bdd">
			    <div class="inner">
                    <ul>
                        <li><a href="dashboard.php?dbname=0">Nouvelle base de données</a></li>
                        <?php include('liste_db.php'); ?>
                    </ul>
				</div>
			</div><!--

		--><div class="contenu-site">
                <div class="inner">
                    <?php
                        if ( ( isset($_GET["dbname"]) && $_GET["dbname"] == NULL ) || ( !isset($_GET["dbname"]) && !isset($_GET["sql"]) && !isset($_GET["importer"]) ) ) {
                        ?>
                            <div class="dashboard">
                                <div class="resume resume-bdd">
                                    <div class="inner">
                                        <p>
                                            Il y a<br>
                                            <span class="nb-bdd"><?php echo $nbDB; ?></span><br>
                                            bases de données
                                        </p>
                                    </div>
                                </div><!--
                            --><div class="resume resume-php">
                                    <div class="inner">
                                        <p>
                                            Version de PHP :<br>
                                            <span class="nb-bdd"><?php echo phpversion(); ?></span>
                                        </p>
                                    </div>
                                </div><!--
                            --><div class="resume resume-mysql">
                                    <div class="inner">
                                        <p>
                                            Version de MySQL :<br>
                                            <span class="nb-bdd"><?php echo mysql_get_server_info(); ?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        else if (isset($_GET["dbname"]) && $_GET["dbname"] == "0") {
                            ?>
                            <form action="create_db.php" method="post">
                                <legend>Créer une base de données</legend>
                                <input type="text" name="new_db" id="new_db" placeholder="Nom de base de données" required>
                                <input type="submit" name="creer" value="Créer">
                            </form>
                            <?php
                            include('liste_db.php');
                        }
                        else if (isset($_GET["tablename"]) && !isset($_GET["structure"]))
                            include('liste_lignes.php');
                        else if (isset($_GET["structure"]))
                            include('struct_table.php');
                        else if (isset($_GET["sql"]))
                            include('requete.php');
                        else if (isset($_GET["importer"])) {
                        ?>
                            <div id="importation">
                                <h1>Importation dans le serveur actuel</h1>

                                <h2>Fichier à importer :</h2>
                                <form action="import.php" method="post" enctype="multipart/form-data">
                                    <p>
                                        Le fichier doit être au format .sql
                                    </p>
                                    
                                    <label for="file">Parcourir :</label>
                                    <input type="file" name="file" id="file" />
                                    <p class="taille_max">(Taille maximum: 2 048Kio)</p><br><br>
                                    
                                    <input type="submit" name="uploder" id="uploader" value="Exécuter"/>
                                    <?php session_start();
                                     echo $_SESSION['filesize'];
                                     echo $_SESSION['filerror'];
                                     echo '</br>'.$_SESSION['message'];?>
                                </form>
                            </div>
                        <?php }
                        else if (isset($_GET["ope"])) {
                            ?>
                            <div id="operations">
                                <div class="new-table">
                                    <form action="operation.php" method="get">
                                        <fieldset>
                                            <legend>Nouvelle table</legend>
                                            <input type="hidden" name="dbname" id="dbname" value="<?php echo $_GET["dbname"] ?>">
                                            <label for="nom_table">Nom : </label>
                                            <input type="text" name="nom_table" id="nom_table" required>
                                            <label for="nb_colonnes">Nombre de colonnes : </label>
                                            <input type="number" name="nb_colonnes" id="nb_colonnes" min="0" required>
                                            <input type="button" name="btn_create_table" id="btn_create_table" value="Exécuter" onClick="nbColonne()">
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="rename-base">
                                    <form action="operation.php" method="get">
                                        <fieldset>
                                            <legend>Renommer la base de données comme suit :</legend>
                                            <input type="hidden" name="dbname" id="dbname" value="<?php echo $_GET["dbname"] ?>">
                                            <input type="text" name="nom_db" id="nom_db" required>
                                            <input type="submit" name="executer" value="Exécuter">
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="delete-base">
                                    <form action="operation.php" method="post">
                                        <fieldset>
                                            <legend>Supprimer la base de données</legend>
                                            <input type="hidden" name="dbname" id="dbname" value="<?php echo $_GET["dbname"] ?>">
                                            <input type="hidden" name="drop_db" id="drop_db" value="DROP DATABASE <?php echo $_GET["dbname"] ?>">
                                            <input type="submit" name="btn_drop_db" id="btn_drop_db" value="Exécuter">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <?php
                        }
                        else
                            include('liste_tables.php');
                    ?>
				</div>
			</div>
		</div>
    	<script src="js/jquery-1.11.1.min.js"></script>
		<!-- <script src="//code.jquery.com/jquery-1.11.2.min.js"></script> -->
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>