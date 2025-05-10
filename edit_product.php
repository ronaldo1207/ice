<?php
include 'db.php';

// Validar que se recibe un ID válido
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $codigo = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM productos WHERE Codigo='$codigo'";
    $result = $conn->query($sql);
    $producto = $result->fetch_assoc();
} else {
    die("ID no válido.");
}

// Verificar si se encontró el producto
if (!$producto) {
    die("Producto no encontrado.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <style>
        body {
            background-color: #111;
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h2 {
            margin-top: 20px;
            font-size: 1.8em;
        }
        .form-container {
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
            padding: 20px;
            background-color: #222;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        input, button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #444;
        }
        input {
            background-color: #333;
            color: white;
        }
        button {
            background-color: yellow;
            border: none;
            cursor: pointer;
            font-weight: bold;
            color: black;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #e6e600;
        }
    </style>
</head>
<body>
    <h2>Editar Producto</h2>
    <div class="form-container">
        <form action="crud.php" method="POST">
            <input type="hidden" name="codigo" value="<?= htmlspecialchars($producto['Codigo']) ?>">

            <input type="text" name="producto" value="<?= htmlspecialchars($producto['Producto']) ?>" required>
            <input type="text" name="ubicacion" value="<?= htmlspecialchars($producto['Ubicacion']) ?>" required>
            <input type="text" name="categoria" value="<?= htmlspecialchars($producto['Categoria']) ?>" required>
            <input type="text" name="descripcion" value="<?= htmlspecialchars($producto['Descripcion']) ?>" required>
            <input type="text" name="marca" value="<?= htmlspecialchars($producto['Marca']) ?>" required>
            <input type="text" name="modelo" value="<?= htmlspecialchars($producto['Modelo']) ?>" required>
            <input type="date" name="fecha_de_compra" value="<?= htmlspecialchars($producto['Fecha_de_compra'] ?? '') ?>" required>
            <input type="text" name="garantia" value="<?= htmlspecialchars($producto['Garantia']) ?>" required>

            <input type="number" step="0.01" name="precio_de_compra" value="<?= number_format($producto['Precio_de_compra'] ?? 0, 2, '.', '') ?>" required>
            <input type="number" step="0.01" name="ganancia_neta" value="<?= number_format($producto['Ganancia_Neta'] ?? 0, 2, '.', '') ?>" required>
            <input type="number" step="0.01" name="porcentaje_ganancia" value="<?= number_format($producto['Porcentaje_Ganancia'] ?? 0, 2, '.', '') ?>" required>
            <input type="number" step="0.01" name="precio_de_venta" value="<?= number_format($producto['Precio_De_Venta'] ?? 0, 2, '.', '') ?>" required>

            <button type="submit" name="actualizar">Actualizar</button>
        </form>
    </div>
</body>
</html>