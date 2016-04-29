<?php
try {
    require 'fonctions.php';

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $bdd = getBdd();
        // Définition de la requête SQL
        $requete = "SELECT * FROM bd JOIN categorie ON bd.idCateg=categorie.id WHERE bd.id=?";
        // Exécution de la requête SQL et récupération de ses résultats
        $resultat = $bdd->prepare($requete);
        $resultat->execute(array($id));
        if ($resultat->rowCount() == 1) {
            // Accès à la 1ère (et unique) ligne de résultat
            $bd = $resultat->fetch();
        }
    }
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
    <title>Détails sur une BD</title>
</head>
<body>
    <div class="container">
        <?php if (isset($bd)) { ?>
            <h3><?php echo escape($bd['nom']) ?></h3>
            <ul>
                <li>Auteur : <?php echo escape($bd['auteur']) ?></li>
                <li>Nombre d'albums : <?php echo escape($bd['nbAlbums']) ?></li>
                <li>Catégorie : <?php echo escape($bd['libelle']) ?></li>
            </ul>
        <?php }
        else { ?>
            <div class="alert alert-danger">Erreur !</div>
        <?php } ?>
    </div>
</body>
</html>
