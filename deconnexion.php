<?php
// Démarrer la session
session_start();

// Détruire toutes les variables de session
$_SESSION = [];

// Détruire la session
session_destroy();

// Rediriger l'utilisateur vers la page d'accueil ou la page de connexion
header('Location: index.php'); // Remplace 'index.php' par la page de ton choix
exit();
?>
