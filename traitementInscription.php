<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];


    $host = 'localhost'; //adresse de bdd
    $db = 'reseaupaf'; //nom de la base de données
    $user = 'root'; //user de la base de données
    $pass = ''; //mdp de la base de données
    $charset = 'utf8mb4'; //laissez ca

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass);

        $sql = "INSERT INTO utlisateur (pseudo, mdp) VALUES (:username, :password)";
        $stmt = $pdo->prepare($sql);
        
        if ($stmt->execute(['username' => $username, 'password' => $password])) {
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;

            header('Location: /pafSocial/index.php');
            exit();
        }
    } catch (Exception $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
}
?>
