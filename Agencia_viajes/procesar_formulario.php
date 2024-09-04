<?php
require_once 'Cliente.php';
require_once 'GestionClientes.php';

$gestionClientes = new GestionClientes();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['agregar'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $cliente = new Cliente($nombre, $correo);
        $gestionClientes->agregarCliente($cliente);
    } elseif (isset($_POST['eliminar'])) {
        $id = $_POST['indice'];
        $gestionClientes->eliminarCliente($id);
    }
}

$clientes = $gestionClientes->mostrarClientes();
?>
            