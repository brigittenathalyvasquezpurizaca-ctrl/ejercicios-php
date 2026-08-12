<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Promedio</title>
</head>
<body>

<h2>Cálculo de promedio</h2>

<form method="post">
    <label>Nota 1:</label>
    <input type="number" name="nota1" step="0.01" required>

    <br><br>

    <label>Nota 2:</label>
    <input type="number" name="nota2" step="0.01" required>

    <br><br>

    <label>Nota 3:</label>
    <input type="number" name="nota3" step="0.01" required>

    <br><br>

    <button type="submit">Calcular promedio</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];

    $promedio = ($nota1 + $nota2 + $nota3) / 3;

    echo "<h3>Promedio: " . number_format($promedio, 2) . "</h3>";
}
?>

</body>
</html>
