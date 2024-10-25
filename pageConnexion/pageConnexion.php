<!DOCTYPE html>
<html lang="fr">

<?php
// Démarrer la session
session_start();

// Détruire toutes les variables de session
$_SESSION = [];

// Détruire la session
session_destroy();
?>


<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  

  <!-- CSS du header !-->
  <link rel="stylesheet" href="../header/style.css" />
  <link rel="stylesheet" href="../css/flexboxs.css" />

  <link rel="stylesheet" href="style.css" />

   <!-- Google Fonts !-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jacquarda+Bastarda+9&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">


  <title>Reseau Paf</title>
</head>
<main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/pafSocial/header/header.php'; ?>
    <div class="grosseDiv">
        <div class="boiteForm">
            <div class="div-titre-form">
                <div class="child-titre-form">
                    <p>Se connecter : </p>
                </div>
                <div class="child-titre-form">
                    <form class="formulaireStyle" action="/pafSocial/traitementConnexion.php" method="POST">
                        <div>
                            <label for="username">Pseudo:</label>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div>
                            <label for="password">Mot de passe:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div>
                            <input type="submit" value="Connexion">
                        </div>
                    </form>
                </div>
            </div>            
        </div>
        <div class="boiteForm">
        <div class="div-titre-form">
                <div class="child-titre-form">
                    <p>S'inscrire</p>
                </div>
                <div class="child-titre-form">
                <form class="formulaireStyle" action="/pafSocial/traitementInscription.php" method="POST">
                <div>
                    <label for="username">Pseudo:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div>
                    <label for="password">Mot de passe:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div>
                    <input type="submit" value="Inscription">
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
  <script></script>
</main>

</html>