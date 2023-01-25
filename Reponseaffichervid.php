<html lang="fr">
	
	<head> 
		<meta charset="utf-8" />
		<title>
			Projet Base de données avancée : Analyses des tendances youtubes en france - Affichage de la base de donnée
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
				<h1>Voici le résultat de votre requête :</h1>
				<?php
					include('Connexion.php');
					$Chaine =$_GET['id'];
					$jours=$_GET['day'];
					$utjours=$_GET['utday'];
					$trivid=$_GET['trvid'];
					$tricat=$_GET['trcat'];
					$triday=$_GET['trday'];
					$trivid=$_GET['trvu'];

					if ($utjours!=TRUE){$sql = "SELECT Titre, Category_Name, Nb_jours_Tendance, Nb_vues, Nb_likes, Nb_dislikes FROM Video, Categorie WHERE Category_Id=Categorie_ID AND Chaine_ID='$Chaine' ";
						echo "Voici toute les vidéos de la chaine $Chaine étant resté en tendance au moins une journée:";
						echo'<table class="centre" id="fond"> <tr> ';
						echo"<th>Titre</th> <th>Catégorie</th> <th>Nombre de jours en tendance</th>  <th>Nombre de vue</th> <th>Nombre de j'aime</th> <th>Nombre de je n'aime pas</th>  </tr>";
						foreach ($pdo->query($sql) as $row) {
							echo"<tr> \n";
							echo"<td>".$row['Titre']."</td>";
							echo"<td>".$row['Category_Name']."</td>";
							echo"<td>".$row['Nb_jours_Tendance']."</td>";
							echo"<td>".$row['Nb_vues']."</td>";
							echo"<td>".$row['Nb_likes']."</td>";
							echo"<td>".$row['Nb_dislikes']."</td>";
							echo"</tr> ";
					}
						echo"</table>";}
					else {$sql = "SELECT Titre, Category_Name, Nb_jours_Tendance, Nb_vues, Nb_likes, Nb_dislikes FROM Video, Categorie WHERE Category_Id=Categorie_ID AND Chaine_ID='$Chaine' AND Nb_jours_Tendance='$jours' ";
						echo "Voici toute les vidéos de la chaine $Chaine étant resté en tendance pendant $jours jours :";
						echo'<table class="centre" id="fond"> <tr> ';
						echo"<th>Titre</th> <th>Catégorie</th> <th>Nombre de jours en tendance</th>  <th>Nombre de vue</th> <th>Nombre de j'aime</th> <th>Nombre de je n'aime pas</th>  </tr>";
						foreach ($pdo->query($sql) as $row) {
							echo"<tr> \n";
							echo"<td>".$row['Titre']."</td>";
							echo"<td>".$row['Category_Name']."</td>";
							echo"<td>".$row['Nb_jours_Tendance']."</td>";
							echo"<td>".$row['Nb_vues']."</td>";
							echo"<td>".$row['Nb_likes']."</td>";
							echo"<td>".$row['Nb_dislikes']."</td>";
							echo"</tr> ";
					}
						echo"</table>";}
					echo " <br><br> La requête permettant de d'afficher ce tableau est la suivante : $sql";
				?>
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