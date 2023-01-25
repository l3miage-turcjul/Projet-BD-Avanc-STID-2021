<?php

// Connexion à la base de données à compléter
include("Connexion.php");

// Indique au navigateur qu'on envoie du JSON
header("Content-Type: application/json");

// Récupération des résultats de la requête dans un tableau
$result = $pdo->query('SELECT `Titre`,`Nb_vues`,`Commentaires_disabled`,`Notes_disabled`,`Nb_jours_Tendance` FROM `Video`,`Chaine` WHERE Video.Chaine_ID=Chaine.ID_Chaine and `Commentaires_disabled`="VRAI" order by `Nb_jours_Tendance` DESC')
              ->fetchAll(PDO::FETCH_NUM);

// On ajoute les noms de colonne au début du tableau
array_unshift($result, array("Titre","NbVues","commentaires désactivés","notes désactivés","Nombre dejours en tendance"));

// Envoi au format JSON
echo json_encode($result, JSON_NUMERIC_CHECK);
?>