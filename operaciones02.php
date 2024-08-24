<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenación de Cadenas</title>
</head>
<body>
    <h1>Concatenación de Cadenas</h1>

    <form method="post" action="operadores-02.php">
        <label for="cadena1">Cadena 1:</label>
        <input type="text" name="cadena1" id="cadena1" required>
        <br><br>

        <label for="cadena2">Cadena 2:</label>
        <input type="text" name="cadena2" id="cadena2" required>
        <br><br>

        <label for="cadena3">Cadena 3:</label>
        <input type="text" name="cadena3" id="cadena3" required>
        <br><br>

        <input type="submit" value="Concatenar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener las cadenas del formulario
        $cadena1 = $_POST['cadena1'];
        $cadena2 = $_POST['cadena2'];
        $cadena3 = $_POST['cadena3'];

        // Concatenar las cadenas
        $resultado = $cadena1 . " " . $cadena2 . " " . $cadena3;

        // Mostrar el resultado
        echo "<h2>Resultado de la concatenación:</h2>";
        echo "<p>$resultado</p>";
    }
    ?>
</body>
</html>
