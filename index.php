<!DOCTYPE html>
<html lang="fr">

<?php         session_start();
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link rel="stylesheet" href="style.css" />

  <!-- CSS du header !-->
  <link rel="stylesheet" href="header/style.css" />
  <link rel="stylesheet" href="css/flexboxs.css" />

  <link rel="stylesheet" href="styleFormulaire.css" />

   <!-- Google Fonts !-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jacquarda+Bastarda+9&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">


  <title>Reseau Paf</title>
</head>
<main>
    <?php 
        //Si on a pas de pseudo (donc pas connecté)
        if(!isset($_SESSION['username'])){
            header('Location: /pafSocial/pageConnexion/pageConnexion.php');
            exit();
        ;};
    ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/pafSocial/header/header.php'; ?>
    
    
    <div class="div-envoyer-reste">
        <div class="child-envoyer-reste">
            <form id="formulaireMsg" class="formulaireStyle" action="envoieMessage.php" method="POST">
                <div>
                    <label class="msgLabel" for="contenu">Message:</label>
                    <input class="inputMsg" id="msg" type="contenu" id="contenu" name="contenu" required>
                </div>
            </form>
        </div>
        <div class="child-envoyer-reste">
            caca
        </div>

        

    </div>
  <script src="jsIndex.js"></script>
</main>

<script>

</script>

</html>