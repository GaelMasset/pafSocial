<?php
// Démarrer la session
session_start();

// Vérifier si les données du formulaire ont été soumises
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer le pseudo et le mot de passe envoyés via le formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Pour des raisons de sécurité, il est conseillé de hacher le mot de passe
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Informations de connexion à la base de données
    $host = 'localhost'; // Adresse du serveur
    $db = 'reseaupaf'; // Nom de la base de données
    $user = 'root'; // Nom d'utilisateur de la base de données
    $pass = ''; // Mot de passe de la base de données
    $charset = 'utf8mb4'; // Jeu de caractères

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        // Créer une instance PDO
        $pdo = new PDO($dsn, $user, $pass);

        $sql = "INSERT INTO utlisateur (pseudo, mdp) VALUES (:username, :password)";
        $stmt = $pdo->prepare($sql);
        
        if ($stmt->execute(['username' => $username, 'password' => $password])) {
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;

            header('Location: index.php');
            exit();
        }
    } catch (Exception $e) {
        echo "Erreur de connexion : " . $e->getMessage();
    }
}
?>
