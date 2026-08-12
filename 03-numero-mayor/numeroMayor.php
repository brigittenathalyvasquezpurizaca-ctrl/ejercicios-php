<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Número mayor</title>
</head>
<body>

<h2>Encontrar el número mayor</h2>

<form method="post">
    <label>Número 1:</label>
    <input type="number" name="numero1" required>

    <br><br>

    <label>Número 2:</label>
    <input type="number" name="numero2" required>

    <br><br>

    <label>Número 3:</label>
    <input type="number" name="numero3" required>

    <br><br>

    <button type="submit">Buscar mayor</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];

    $mayor = max($numero1, $numero2, $numero3);

    echo "<h3>El número mayor es: $mayor</h3>";
}
?>

</body>
</html>
