<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $contenue = $_POST['contenu'];

    $username = $_SESSION['username'];
    $host = 'localhost'; //adresse de bdd
    $db = 'reseaupaf'; //nom de la base de données
    $user = 'root'; //user de la base de données
    $pass = ''; //mdp de la base de données
    $charset = 'utf8mb4'; //laissez ca

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass);

        $sql = "INSERT INTO messages (envoyeur, dateEnvoie, contenu) 
        VALUES ('$username', NOW(), '$contenue')";


        $stmt = $pdo->prepare($sql);
        
        $stmt->execute();

        header('Location: /pafSocial/index.php');
        exit();
    } catch (Exception $e) {
        echo "Erreur d'envoie : " . $e->getMessage();
    }
}
?>
