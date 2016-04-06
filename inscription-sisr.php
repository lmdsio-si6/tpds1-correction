<?php
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
if (isset($_POST["notifier"])) {
    $notifier = true;
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Résultat de l'inscription</title>
</head>
<body>
    <h1>Inscription terminée</h1>
    <?php echo 'Merci de votre inscription, ' . $prenom . ' ' . $nom; ?>
    <br><br>
    <?php echo 'Votre courriel est ' . $courriel . ' et votre mot de passe ' . $mdp; ?>
    <br><br>
    <?php echo 'Vous êtes de nationalité ' . $nationalite; ?>
    <br><br>
    <?php echo 'Abonnement choisi : ' . $abonnement; ?>
    <br><br>
    <?php
    if ($notifier) {
        echo 'Un courriel de confirmation vous a été envoyé.';
    }
    ?>
</body>
</html>
