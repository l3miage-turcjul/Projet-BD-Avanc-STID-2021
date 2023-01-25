<html lang="fr">
	
	<head> 
		<meta charset="utf-8" />
		<title>
			Projet Base de données avancée : Analyses des tendances youtubes en france - Exploration de la base de données
		</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="Language" content="fr" />         
		<meta name="Description" content="Description de votre page" />
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
	</head>
	
	<body class="fond"> 		
		<nav class="navbar-expand-md navbar-dark bg-dark">
			<!--<a class="navbar-brand">Menu</a>-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="accueil.html">Accueil</a>
				</li>
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Notre Projet</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="Contexte.html">Contexte</a>
						<a class="dropdown-item" href="graph.html">Analyses</a>
						<a class="dropdown-item" href="affichervid.php">Interface D'exploration de la base de données</a>
						<a class="dropdown-item" href="Star.html">Modèle en étoile</a>
						
					</div>
				</li>
			</ul>
			</nav>
		</div>
	
	<div class="container-fluid ">
		<div class="row">
		<div class="col-md-9 art">
			<article>
				<h1>Bienvenu sur l'interface d'exploration de la base de données</h1>
				<p>Veuillez séléctionner le nom de la chaine dont vous voulez voir les vidéos tendances : <BR>
				<div>
				<form method="GET" action="Reponseaffichervid.php">
				Nom de Chaine Youtube :
					<select name="id">
					<?php
					require("Connexion.php");
					$sql = "SELECT Nom_Chaine, ID_Chaine FROM Chaine ORDER BY Nom_Chaine";
					foreach ($pdo->query($sql) as $row) {
						echo "<option value=".$row['ID_Chaine'].">".$row['Nom_Chaine']."</option>\n";
					}
					?>
					</select><BR><br>
				Nombre de jours en tendance:
					<select name="day">
					<?php
					require("Connexion.php");
					$sql = "SELECT DISTINCT(Nb_jours_Tendance) FROM Video ORDER BY Nb_jours_Tendance";
					foreach ($pdo->query($sql) as $row) {
						echo "<option value=".$row['Nb_jours_Tendance'].">".$row['Nb_jours_Tendance']."</option>\n";
					}
					?>
					</select></BR>
				<input type="checkbox" name="utday" value=TRUE>Utiliser les jours de tendance <br><br>
				Trier les vidéos par : <br>
				<input type="radio" name="trvid" value=Titre>Titre de la vidéo<br>
				<input type="radio" name="trcat" value=Category_Name>Catégorie<br>
				<input type="radio" name="trday" value=Nb_jours_Tendance>Nombre de jours en tendance<br>
				<input type="radio" name="trvu" value=Nb_vues>Nombre de vue<br><br>
				<input type="submit" value="Valider"/>
				<input type="reset" value="Annuler"/>
				</div>
				<div>
				<p>Ajouter Chaine :</p>
				<form method="GET" action="Reponse2.php">
				Nom de Chaine Youtube :
				<input type="text" name='chai'/> </BR>
				ID de la Chaine :
				<input type="text" name='ID'/> </BR>
				</div>
				</p>
			</article>
		</div>
		<div class="col-xl-2 cot">
				<section>
				<h2>Liens utiles :</h2><br>
				<p><a href="https://www.youtube.com/" class="button">Le Site de youtube</a><br><br><br>
				<a href="https://www.kaggle.com/rsrishav/youtube-trending-video-dataset?select=FR_youtube_trending_data.csv" class="button">Sources des données </a></p>
				</section>
		</div>
		</div>
		<div class="row">
		<div class="col-md-8 offset-md-2 pied">
			<img class="img-fluid  float-left" src="images/logo_stid_vignette.jpg" alt="Logo de STID" id="logo">
			<h3 class="bast">Nous joindre: </h3><p class="basp">Adresse Physique: Bât Michel Dubois (ex-BSHM) – Aile C 1251, Avenue Centrale Domaine Universitaire 38400 Saint Martin d’Hères <br>
			Adresse Postale: IUT2 – Département STID Bat. Michel Dubois (ex-BSHM) CS 40700 38058 GRENOBLE Cedex <br>
			Téléphone : 04 76 82 56 41 <br>
			Site: <a href="https://www.stid-grenoble.fr/formations/">https://www.stid-grenoble.fr/formations/</a></p>
		</div>
		</div>
	</div>
	</body>
</html>