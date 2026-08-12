<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de vocales</title>
</head>
<body>

<h2>Contador de vocales</h2>

<form method="post">
    <label>Ingrese una frase:</label>
    <br><br>

    <input type="text" name="texto" required>

    <br><br>

    <button type="submit">Contar vocales</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = strtolower($_POST["texto"]);

    $contador = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        if (
            $texto[$i] == "a" ||
            $texto[$i] == "e" ||
            $texto[$i] == "i" ||
            $texto[$i] == "o" ||
            $texto[$i] == "u"
        ) {
            $contador++;
        }
    }

    echo "<h3>Cantidad de vocales: $contador</h3>";
}
?>

</body>
</html>
