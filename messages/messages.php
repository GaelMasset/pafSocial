<?php


$host = 'localhost'; // Adresse du serveur
$db = 'reseaupaf'; // Nom de la base de données
$user = 'root'; // Nom d'utilisateur de la base de données
$pass = ''; // Mot de passe de la base de données
$charset = 'utf8mb4'; //jsp faut mettre ca
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


echo'
<div class="boiteMsg">
';
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Pour gérer les erreurs

    $sql = "SELECT * FROM messages order by dateEnvoie desc";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

        $envoyeur = $row['envoyeur'];
        $dateEnvoie = $row['dateEnvoie'];
        $contenu = $row['contenu'];

        echo'
            <div class="msgDB">Message envoyé le ' . $dateEnvoie . ' par ' . $envoyeur . ': ' . $contenu . '</div>';
        ;
    }

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

echo'
</div>
';

?>
