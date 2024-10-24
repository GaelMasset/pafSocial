<?php
// Démarrer la session
session_start();

// Vérifier si les données du formulaire ont été soumises
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer le pseudo et le mot de passe envoyés via le formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

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
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Pour gérer les erreurs

        // Préparer la requête pour récupérer l'utilisateur
        $sql = "SELECT mdp FROM utlisateur WHERE pseudo = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['username' => $username]);
        
        // Vérifier si l'utilisateur existe
        if ($stmt->rowCount() > 0) {
            // L'utilisateur existe, récupérer le mot de passe haché
            $vraiPassword = $stmt->fetchColumn();

            // Vérifier le mot de passe
            if ($password == $vraiPassword) {
                // Le mot de passe est correct, on connecte l'utilisateur
                $_SESSION['username'] = $username;
                $_SESSION['logged_in'] = true;

                // Redirection vers index.php
                header('Location: index.php');
                exit();
            } else {
                echo "Mot de passe incorrect.";
            }
        } else {
            echo "Cet utilisateur n'existe pas.";
        }
    } catch (PDOException $e) {
        // Gestion des erreurs de connexion
        echo "Erreur de connexion : " . $e->getMessage();
    }
}
?>
