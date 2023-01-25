<?php

// Connexion à la base de données à compléter
include("Connexion.php");

// Indique au navigateur qu'on envoie du JSON
header("Content-Type: application/json");

// Récupération des résultats de la requête dans un tableau
$result = $pdo->query('Select Category_Name,SUM(`Nb_vues`) from Video,Categorie WHERE Categorie.category_Id=Video.`Categorie_ID` group by category_Id ORDER BY SUM(`Nb_vues`) DESC')
              ->fetchAll(PDO::FETCH_NUM);

// On ajoute les noms de colonne au début du tableau
array_unshift($result, array("Nom des catégories","NbVues"));

// Envoi au format JSON
echo json_encode($result, JSON_NUMERIC_CHECK);
?>