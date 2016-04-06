<?php
require 'fonctions.php';

$presidents = array("De Gaulle", "Pompidou", "Giscard d'Estaing", "Mitterrand",
"Chirac", "Sarkozy", "Hollande");
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Les Présidents</title>
</head>
<body>
    <div class="container">
        <h1>Les Présidents de la Vème République</h1>
        <ul>
            <?php
            foreach($presidents as $president) {
                echo "<li>" . escape($president) . "</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
