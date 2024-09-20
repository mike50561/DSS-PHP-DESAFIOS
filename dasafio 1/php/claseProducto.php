<?php
class Producto {
    private $codigo;
    private $nombre;
    private $precio;
    private $cantidad;

    public function __construct($codigo, $nombre, $precio, $cantidad) {
        $this->setCodigo($codigo);
        $this->setNombre($nombre);
        $this->setPrecio($precio);
        $this->setCantidad($cantidad);
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        if (!preg_match("/^[a-zA-Z]{2}\d{6}$/", $codigo)) {
            throw new Exception("por favor ingrese 2 letras y 6 numeros.");
        }
        $this->codigo = $codigo;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        if (preg_match("/\d|[^\w\s]/", $nombre)) {
            throw new Exception("no se permiten caracteres especiales .");
        }
        $this->nombre = $nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        if ($precio < 0) {
            throw new Exception("los valores no pueden ser negativos.");
        }
        $this->precio = $precio;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    public function setCantidad($cantidad) {
        if ($cantidad < 0) {
            throw new Exception("los valores no pueden ser negativos.");
        }
        $this->cantidad = $cantidad;
    }
}
?>