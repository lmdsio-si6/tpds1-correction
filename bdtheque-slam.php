<?php
try {
    require 'fonctions.php';

    $bdd = getBdd();
    // Définition de la requête SQL
    $requete = "SELECT bd.id as id, nom, auteur, libelle FROM bd JOIN categorie ON bd.idCateg=categorie.id ORDER BY nom";
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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Mes BD</title>
</head>
<body>
    <div class="container">
        <h1>Mes BD</h1>
        <table class="table table-striped">
            <tr><th>Nom</th><th>Auteur</th><th>Catégorie</th></tr>
            <?php
            // Récupération de tous les résultats de la requête dans un tableau
            $donnees = $resultat->fetchAll();
            // Itération sur les résultats de la requête SQL
            foreach ($donnees as $ligne) {
                echo '<tr><td><a href="bd.php?id=' . $ligne['id'] . '">' . escape($ligne['nom']) . "</a></td><td>" . escape($ligne['auteur']) .
                    "</td><td>" . escape($ligne['libelle']) . "</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
