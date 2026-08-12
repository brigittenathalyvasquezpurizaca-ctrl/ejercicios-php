<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factorial</title>
</head>
<body>

<h2>Cálculo de factorial</h2>

<form method="post">
    <label>Ingrese un número:</label>
    <input type="number" name="numero" min="0" required>

    <br><br>

    <button type="submit">Calcular factorial</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $factorial = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $factorial = $factorial * $i;
    }

    echo "<h3>El factorial de $numero es: $factorial</h3>";
}
?>

</body>
</html>
