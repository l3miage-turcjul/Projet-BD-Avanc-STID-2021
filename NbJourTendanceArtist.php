<?php

// Connexion à la base de données à compléter
include("Connexion.php");

// Indique au navigateur qu'on envoie du JSON
header("Content-Type: application/json");

// Récupération des résultats de la requête dans un tableau
$result = $pdo->query('SELECT  Nom_Chaine,Nb_vues,Nb_likes, Nb_Jours_Tendance,Category_Id   FROM Chaine,Video,Categorie WHERE Video.Chaine_ID=Chaine.ID_Chaine and Categorie.Category_Id=Video.Categorie_ID and Nb_Jours_Tendance>6 group by Nom_Chaine order by Nb_Jours_Tendance DESC')
              ->fetchAll(PDO::FETCH_NUM);

// On ajoute les noms de colonne au début du tableau
array_unshift($result, array("Nom de la chaine","nb vues","nb lkes","Nombre de jours en tendance","catégorie"));

// Envoi au format JSON
echo json_encode($result, JSON_NUMERIC_CHECK);
?>