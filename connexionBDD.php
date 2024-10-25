<?php
$host = 'localhost';
$db = 'nom_de_ta_base';
$user = 'nom_utilisateur';
$pass = 'mot_de_passe';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$sql = "INSERT INTO utilisateurs (username, password) VALUES (:username, :password)";
    $stmt = $pdo->prepare($sql);
?>

