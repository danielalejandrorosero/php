<?php
session_start();

class Catalogo {
    private $productos = [];

    public function __construct() { 
        if (!isset($_SESSION['productos'])) {
            $_SESSION['productos'] = [];
        }
        $this->productos = $_SESSION['productos'];
    }

    public function agregarProducto($producto) {
        array_push($this->productos, $producto);
        $this->actualizarSesion();
    }



    public function eliminarProducto($id) {
        unset($this->productos[$id]);
        $this->productos = array_values($this->productos); // Reindexar el array
        $this->actualizarSesion();
    }

    // esto para mostrar los productos

    public function mostrarProductos() {
        return $this->productos;
    }

    // para mantener los datos
    private function actualizarSesion() {
        $_SESSION['productos'] = $this->productos;
    }
}
?>
