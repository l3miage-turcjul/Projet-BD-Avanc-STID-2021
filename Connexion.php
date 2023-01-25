<?php
// Connexion à la base de données
$user = 'turcjul'; // à changer par votre login sur mysql
$password = '1566'; // à changer par votre passwd sur mysql
$db = 'turcjul3'; // à changer par le nom de votre BD
$host = 'etu-mysql.iut2.univ-grenoble-alpes.fr';
// Connexion à la base de données
try
{
$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8",
$user, $password);
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
?>