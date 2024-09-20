<?php
require_once 'claseProducto.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $codigo = $_POST["codigo"];
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $cantidad = $_POST["cantidad"];

        $producto = new Producto($codigo, $nombre, $precio, $cantidad);

        echo "Código: " . $producto->getCodigo() . "<br>";
        echo "Nombre: " . $producto->getNombre() . "<br>";
        echo "Precio: " . $producto->getPrecio() . "<br>";
        echo "Cantidad: " . $producto->getCantidad() . "<br>";
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
}
?>
