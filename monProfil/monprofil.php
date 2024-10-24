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
  <link rel="stylesheet" href="../header/style.css" />
  <link rel="stylesheet" href="../css/flexboxs.css" />

  <link rel="stylesheet" href="styleFormulaire.css" />

  <!-- Google Fonts !-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jacquarda+Bastarda+9&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">

  <title>Reseau Paf</title>
</head>
<main>
    <?php include '../header/header.php'; ?>
    <div class="div-corps">
    <?php 

        //Si on a pas de pseudo (donc pas connecté)
        if(!isset($_SESSION['username'])){
            echo '
            <div class="child-corps"></div>
                <div class="child-corps">',
                include 'formulaireConnexion.php';
                '</div>
                <div class="child-corps"></div>
            </div>

            
            '
        ;};

        if(isset($_SESSION['username'])){
            echo'
            <div class="div-grosse policeBonne">
                <div class="child-grosse">
                    <div class="div-image-info">
                        <div class="child-image-info">
                            <img class="icone" src="icon.png">
                            <a class="modifProfil" href="/pafSocial/modifProfil/modifProfil.php">Modifier votre profil</a>
                        </div>
                        <div class="child-image-info">
                            <div id="pseudo">
                                Pseudo : ', $_SESSION['username'] ,'
                            </div>
                        </div>
                    </div>
                </div>
                <div class="child-grosse">

                </div>
            </div>
            ';
        }
    ?>
    </div>
  <script></script>
</main>

</html>