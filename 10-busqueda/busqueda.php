<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Búsqueda simple</title>
</head>
<body>

<h2>Búsqueda simple</h2>

<form method="post">
    <label>Ingrese números separados por comas:</label>
    <br><br>

    <input type="text" name="numeros" placeholder="10,20,30,40,50" required>

    <br><br>

    <label>Número a buscar:</label>
    <input type="number" name="buscar" required>

    <br><br>

    <button type="submit">Buscar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numeros = explode(",", $_POST["numeros"]);
    $buscar = $_POST["buscar"];

    $encontrado = false;

    foreach ($numeros as $numero) {
        if (trim($numero) == $buscar) {
            $encontrado = true;
            break;
        }
    }

    if ($encontrado) {
        echo "<h3>El número $buscar fue encontrado.</h3>";
    } else {
        echo "<h3>El número $buscar no fue encontrado.</h3>";
    }
}
?>

</body>
</html>
