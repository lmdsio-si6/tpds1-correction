<?php
require 'fonctions.php';

$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$courriel = $_POST["courriel"];
$mdp = $_POST["mdp"];
$nationalite = "inconnue";
switch ($_POST['nationalite']) {
case 'FR':
    $nationalite = 'française';
    break;
case 'BE':
    $nationalite = 'belge';
    break;
case 'SUI':
    $nationalite = 'suisse';
    break;
}
$abonnement = "aucun";
switch ($_POST["abonnement"]) {
case "NEWSPROMO" :
    $abonnement = "newsletter et promotions";
    break;
case "NEWS" :
    $abonnement = "newsletter uniquement";
    break;
}
$commentaires = $_POST['commentaire'];
if (isset($_POST["notifier"])) {
    $notifier = true;
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Résultat de l'inscription</title>
</head>
<body>
    <div class="container">
        <h1>Inscription terminée</h1>
        <?php echo 'Merci de votre inscription, ' . escape($prenom) . ' ' . escape($nom); ?>
        <br><br>
        <?php echo 'Votre courriel est ' . escape($courriel) . ' et votre mot de passe ' . escape($mdp); ?>
        <br><br>
        <?php echo 'Vous êtes de nationalité ' . escape($nationalite); ?>
        <br><br>
        <?php echo 'Abonnement choisi : ' . escape($abonnement); ?>
        <br><br>
        <?php if (!empty($commentaires)) {
            echo "Vous avez écrit le commentaire : " . escape($commentaires) . "<br><br>";
        }
        if ($notifier) {
            echo 'Un courriel de confirmation vous a été envoyé.';
        } ?>
    </div>
</body>
</html>
