<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo del Costo Total de la Compra</title>
</head>
<body>
    <h1>Cálculo del Costo Total de la Compra</h1>

    <form method="post" action="operadores-compra.php">
        <h2>Producto 1</h2>
        <label for="precio1">Precio:</label>
        <input type="number" name="precio1" id="precio1" step="0.01" required>
        <label for="cantidad1">Cantidad:</label>
        <input type="number" name="cantidad1" id="cantidad1" min="1" required>
        
        <h2>Producto 2</h2>
        <label for="precio2">Precio:</label>
        <input type="number" name="precio2" id="precio2" step="0.01" required>
        <label for="cantidad2">Cantidad:</label>
        <input type="number" name="cantidad2" id="cantidad2" min="1" required>
        
        <h2>Producto 3</h2>
        <label for="precio3">Precio:</label>
        <input type="number" name="precio3" id="precio3" step="0.01" required>
        <label for="cantidad3">Cantidad:</label>
        <input type="number" name="cantidad3" id="cantidad3" min="1" required>
        
        <br><br>
        <input type="submit" value="Calcular Total">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los precios y cantidades del formulario
        $precio1 = $_POST['precio1'];
        $cantidad1 = $_POST['cantidad1'];
        $precio2 = $_POST['precio2'];
        $cantidad2 = $_POST['cantidad2'];
        $precio3 = $_POST['precio3'];
        $cantidad3 = $_POST['cantidad3'];

        // Calcular el subtotal
        $subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantidad2) + ($precio3 * $cantidad3);

        // Definir la tasa de impuestos y el porcentaje de descuento
        $tasa_impuestos = 0.15; // 15% de impuestos
        $porcentaje_descuento = 0.10; // 10% de descuento

        // Calcular el monto de impuestos y descuento
        $monto_impuestos = $subtotal * $tasa_impuestos;
        $descuento = $subtotal * $porcentaje_descuento;

        // Calcular el total final
        $total_final = $subtotal + $monto_impuestos - $descuento;

        // Mostrar los resultados
        echo "<h2>Resultados de la Compra:</h2>";
        echo "<p>Subtotal: $$subtotal</p>";
        echo "<p>Monto de Impuestos (15%): $$monto_impuestos</p>";
        echo "<p>Descuento Aplicado (10%): $$descuento</p>";
        echo "<p>Total Final: $$total_final</p>";
    }
    ?>
</body>
</html>
