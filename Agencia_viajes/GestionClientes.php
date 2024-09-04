<?php
session_start();

class GestionClientes {
    private $clientes;


    // este contructor se ejecuta cuando se crea una instancia de la clase

    public function __construct() {
        if (!isset($_SESSION['clientes'])) {
            $_SESSION['clientes'] = [];
        }
        $this->clientes = $_SESSION['clientes'];
    }


    // este metodo  es para agregar un nuevo cliente a la sesion utilizando array_push y el actualizar sesion es para actualizar la sesion inicial
    public function agregarCliente($cliente) {
        array_push($this->clientes, $cliente);
        $this->actualizarSesion();
    }



    // este metodo es para eliminar un cliente de la sesion
    public function eliminarCliente($id) {
        unset($this->clientes[$id]);
        $this->clientes = array_values($this->clientes); // Reindexa el array
        $this->actualizarSesion();
    }


    // este metodo es para mostrar todos los clientes
    public function mostrarClientes() {
        return $this->clientes;
    }


    // este metodo es para actualizar la sesion y no se pierdan los datos al cerrar la pagina
    private function actualizarSesion() {
        $_SESSION['clientes'] = $this->clientes;
    }
}
?>
