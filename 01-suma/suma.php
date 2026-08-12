<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma de números</title>
</head>
<body>

<h2>Suma de dos números</h2>

<form method="post">
    <label>Número 1:</label>
    <input type="number" name="numero1" required>

    <br><br>

    <label>Número 2:</label>
    <input type="number" name="numero2" required>

    <br><br>

    <button type="submit">Sumar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    $suma = $numero1 + $numero2;

    echo "<h3>Resultado: $suma</h3>";
}
?>

</body>
</html>
