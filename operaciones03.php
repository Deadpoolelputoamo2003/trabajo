<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo del Área de un Rectángulo</title>
</head>
<body>
    <h1>Cálculo del Área de un Rectángulo</h1>

    <form method="post" action="operadores-03.php">
        <label for="longitud">Longitud:</label>
        <input type="number" name="longitud" id="longitud" step="0.01" required>
        <br><br>

        <label for="ancho">Ancho:</label>
        <input type="number" name="ancho" id="ancho" step="0.01" required>
        <br><br>

        <input type="submit" value="Calcular Área">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la longitud y el ancho del formulario
        $longitud = $_POST['longitud'];
        $ancho = $_POST['ancho'];

        // Calcular el área del rectángulo
        $area = $longitud * $ancho;

        // Mostrar el resultado
        echo "<h2>Resultado:</h2>";
        echo "<p>El área del rectángulo es: $area</p>";
    }
    ?>
</body>
</html>
