<?php
require_once 'Producto.php';
require_once 'Catalogo.php';

$catalogo = new Catalogo();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['agregar'])) {
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $producto = new Producto($nombre, $precio);
        $catalogo->agregarProducto($producto);
    } elseif (isset($_POST['eliminar'])) {
        $id = $_POST['id'];
        $catalogo->eliminarProducto($id);
    }
}

$productos = $catalogo->mostrarProductos();
?>
