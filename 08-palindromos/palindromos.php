<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Palíndromos</title>
</head>
<body>

<h2>Comprobar palíndromo</h2>

<form method="post">
    <label>Ingrese una palabra:</label>
    <input type="text" name="palabra" required>

    <br><br>

    <button type="submit">Comprobar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palabra = strtolower($_POST["palabra"]);

    $invertida = strrev($palabra);

    if ($palabra == $invertida) {
        echo "<h3>La palabra '$palabra' es un palíndromo.</h3>";
    } else {
        echo "<h3>La palabra '$palabra' no es un palíndromo.</h3>";
    }
}
?>

</body>
</html>
