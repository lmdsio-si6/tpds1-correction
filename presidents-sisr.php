<?php
$presidents = array("De Gaulle", "Pompidou", "Giscard d'Estaing", "Mitterrand",
    "Chirac", "Sarkozy", "Hollande");
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Les Présidents</title>
</head>
<body>
    <h1>Les Présidents de la Vème République</h1>
    <?php
    foreach($presidents as $president) {
        echo $president . "<br>";
    }
    ?>
</body>
</html>
