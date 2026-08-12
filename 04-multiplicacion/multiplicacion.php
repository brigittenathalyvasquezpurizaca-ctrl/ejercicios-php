<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
</head>
<body>

<h2>Tabla de multiplicar</h2>

<form method="post">
    <label>Ingrese un número:</label>
    <input type="number" name="numero" required>

    <br><br>

    <button type="submit">Mostrar tabla</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    echo "<h3>Tabla del $numero</h3>";

    for ($i = 1; $i <= 12; $i++) {
        $resultado = $numero * $i;

        echo "$numero x $i = $resultado<br>";
    }
}
?>

</body>
</html>
