<?php
try {
    $bdd = new PDO("mysql:host=localhost;dbname=bdtheque;charset=utf8",
        "bdtheque_util", "secret",
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    // Définition de la requête SQL
    $requete = "SELECT * FROM bd ORDER BY nom";
    // Exécution de la requête SQL et récupération de ses résultats
    $resultat = $bdd->query($requete);
}
catch (Exception $e) {
    die('Erreur fatale : ' . $e->getMessage());
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Mes BD</title>
</head>
<body>
    <h1>Mes BD</h1>
    <ul>
        <?php
        // Récupération de tous les résultats de la requête dans un tableau
        $donnees = $resultat->fetchAll();
        // Itération sur les résultats de la requête SQL
        foreach ($donnees as $ligne) {
            echo "<li>" . $ligne['nom'] . " (" . $ligne['auteur'] . ")</li>";
        }
        ?>
    </ul>
</body>
</html>
