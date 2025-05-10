<?php
include 'db.php';

// Obtener todos los productos
function obtenerProductos() {
    global $conn;
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);
    $productos = [];

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $productos[] = $row;
        }
    } else {
        error_log("Error al obtener productos: " . $conn->error); // Manejo de errores
    }
    return $productos;
}

// Agregar un nuevo producto
if (isset($_POST['agregar'])) {
    $producto = $conn->real_escape_string($_POST['producto']);
    $ubicacion = $conn->real_escape_string($_POST['ubicacion']);
    $categoria = $conn->real_escape_string($_POST['categoria']);
    $descripcion = $conn->real_escape_string($_POST['descripcion']);
    $marca = $conn->real_escape_string($_POST['marca']);
    $modelo = $conn->real_escape_string($_POST['modelo']);
    $codigo = $conn->real_escape_string($_POST['codigo']);
    $fecha_de_compra = $conn->real_escape_string($_POST['fecha_de_compra']);
    $garantia = $conn->real_escape_string($_POST['garantia']);
    $precio_de_compra = floatval($_POST['precio_de_compra']);
    $ganancia_neta = floatval($_POST['ganancia_neta']);
    $porcentaje_ganancia = floatval($_POST['porcentaje_ganancia']);
    $precio_de_venta = floatval($_POST['precio_de_venta']);

    $sql = "INSERT INTO productos (Producto, Ubicacion, Categoria, Descripcion, Marca, Modelo, Codigo, `Fecha_de_compra`, Garantia, `precio_de_compra`, `Ganancia_Neta`, `Porcentaje_Ganancia`, `Precio_De_Venta`) 
            VALUES ('$producto', '$ubicacion', '$categoria', '$descripcion', '$marca', '$modelo', '$codigo', '$fecha_de_compra', '$garantia', '$precio_de_compra', '$ganancia_neta', '$porcentaje_ganancia', '$precio_de_venta')";

    if ($conn->query($sql)) {
        header("Location: index.php");
        exit();
    } else {
        error_log("Error al agregar producto: " . $conn->error); // Registro de errores
        echo "Error al agregar el producto. Intenta nuevamente.";
    }
}

// Editar un producto
if (isset($_POST['actualizar'])) {
    $codigo = $conn->real_escape_string($_POST['codigo']);
    $producto = $conn->real_escape_string($_POST['producto']);
    $ubicacion = $conn->real_escape_string($_POST['ubicacion']);
    $categoria = $conn->real_escape_string($_POST['categoria']);
    $descripcion = $conn->real_escape_string($_POST['descripcion']);
    $marca = $conn->real_escape_string($_POST['marca']);
    $modelo = $conn->real_escape_string($_POST['modelo']);
    $fecha_de_compra = $conn->real_escape_string($_POST['fecha_de_compra']);
    $garantia = $conn->real_escape_string($_POST['garantia']);
    $precio_de_compra = floatval($_POST['precio_de_compra']);
    $ganancia_neta = floatval($_POST['ganancia_neta']);
    $porcentaje_ganancia = floatval($_POST['porcentaje_ganancia']);
    $precio_de_venta = floatval($_POST['precio_de_venta']);

    $sql = "UPDATE productos SET Producto='$producto', Ubicacion='$ubicacion', Categoria='$categoria', Descripcion='$descripcion', Marca='$marca', Modelo='$modelo', `Fecha_de_compra`='$fecha_de_compra', Garantia='$garantia', `precio_de_compra`='$precio_de_compra', `Ganancia_Neta`='$ganancia_neta', `Porcentaje_Ganancia`='$porcentaje_ganancia', `Precio_De_Venta`='$precio_de_venta' WHERE Codigo='$codigo'";

    if ($conn->query($sql)) {
        header("Location: index.php");
        exit();
    } else {
        error_log("Error al actualizar producto: " . $conn->error); // Registro de errores
        echo "Error al actualizar el producto. Intenta nuevamente.";
    }
}

// Eliminar un producto
if (isset($_GET['delete'])) {
    $codigo = $conn->real_escape_string($_GET['delete']);
    $sql = "DELETE FROM productos WHERE Codigo='$codigo'";

    if ($conn->query($sql)) {
        header("Location: index.php");
        exit();
    } else {
        error_log("Error al eliminar producto: " . $conn->error); // Registro de errores
        echo "Error al eliminar el producto. Intenta nuevamente.";
    }
}
?>