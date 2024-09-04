<?php
class Producto {
    private string $nombre;
    private int $precio;

    public function __construct(string  $nombre, int $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }
}
?>
