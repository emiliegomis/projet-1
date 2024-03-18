<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déterminer si un nombre est premier et calculer son factoriel</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nombre = intval($_POST["nombre"]);

    
    $estPremier = isPrime($nombre);

    
    $factoriel = factoriel($nombre);

    
    echo "<p>Le nombre $nombre " . ($estPremier ? "est" : "n'est pas") . " premier.</p>";
    echo "<p>Le factoriel de $nombre est $factoriel.</p>";
}


function isPrime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}


function factoriel($n) {
    return $n == 0 ? 1 : $n * factoriel($n - 1);
}
?>

<form method="post" action="evaluation.php">
    <label for="nombre">Entier :</label>
    <input type="number" name="nombre" id="nombre" required>
    <input type="submit" value="Vérifier et Calculer">
</form>

</body>
</html>