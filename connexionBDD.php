<?php
$host = 'localhost'; // Adresse du serveur
$db = 'nom_de_ta_base'; // Nom de la base de données
$user = 'nom_utilisateur'; // Nom d'utilisateur de la base de données
$pass = 'mot_de_passe'; // Mot de passe de la base de données
$charset = 'utf8mb4'; // Jeu de caractères

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$sql = "INSERT INTO utilisateurs (username, password) VALUES (:username, :password)";
    $stmt = $pdo->prepare($sql);
?>

