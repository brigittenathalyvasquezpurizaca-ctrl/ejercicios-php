<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inversión de cadenas</title>
</head>
<body>

<h2>Invertir una cadena</h2>

<form method="post">
    <label>Ingrese un texto:</label>
    <input type="text" name="texto" required>

    <br><br>

    <button type="submit">Invertir</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST["texto"];

    $invertido = strrev($texto);

    echo "<h3>Texto original: $texto</h3>";
    echo "<h3>Texto invertido: $invertido</h3>";
}
?>

</body>
</html>
