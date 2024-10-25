
<body>
    <div class="headerSite">
        <div class="headerSite-items">

        </div>
        <div class="headerSite-items">
            <a id="titreBout" href="/pafSocial/">Mega Chat</a>
        </div>
        <div class="headerSite-items">

        </div>
        <div class="headerSite-items">
            <?php 
                if(isset($_SESSION['username'])){
                    echo '
                    <div class="divBoutonProfil">
                    <form action="/pafSocial/monProfil/monProfil.php" method="POST">
                        <button class="boutonProfil" type="submit">Mon Profil</button>
                    </form>
                    </div>
                    <div class="divBoutonProfil">
                    <form action="/pafSocial/deconnexion.php" method="POST">
                        <button class="boutonProfil" type="submit">Déconnexion</button>
                    </form>
                    </div>
                    ';
                }
            ?>
        </div>
    </div>
</body>
