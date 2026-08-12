<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Serie Fibonacci</title>
</head>
<body>

<h2>Serie Fibonacci</h2>

<form method="post">
    <label>Cantidad de números:</label>
    <input type="number" name="cantidad" min="1" required>

    <br><br>

    <button type="submit">Generar Fibonacci</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = $_POST["cantidad"];

    $a = 0;
    $b = 1;

    echo "<h3>Serie Fibonacci:</h3>";

    for ($i = 0; $i < $cantidad; $i++) {
        echo $a . " ";

        $siguiente = $a + $b;
        $a = $b;
        $b = $siguiente;
    }
}
?>

</body>
</html>
