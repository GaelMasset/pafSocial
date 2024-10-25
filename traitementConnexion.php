<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $host = 'localhost'; // Adresse du serveur
    $db = 'reseaupaf'; // Nom de la base de données
    $user = 'root'; // Nom d'utilisateur de la base de données
    $pass = ''; // Mot de passe de la base de données
    $charset = 'utf8mb4'; //jsp faut mettre ca

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {//try car sinon bug
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Pour gérer les erreurs

        $sql = "SELECT mdp FROM utlisateur WHERE pseudo = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username]);
        
        if ($stmt->rowCount() > 0) {
            $vraiPassword = $stmt->fetchColumn();

            if ($password == $vraiPassword) {
                //le mot de passe est correct, on connecte l'utilisateur
                $_SESSION['username'] = $username;
                $_SESSION['logged_in'] = true;

                //redirection vers index.php
                header('Location: /pafSocial/index.php');
                exit();
            } else {
                echo "Mot de passe incorrect.";
            }
        } else {
            echo "Cet utilisateur n'existe pas.";
        }
    } catch (PDOException $e) {
    }
}
?>
