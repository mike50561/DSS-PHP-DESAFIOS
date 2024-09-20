<?php
require_once 'claseCliente.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $codigo = $_POST["codigo"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $DUI = $_POST["DUI"];

        $cliente = new Cliente($codigo, $nombre, $email, $DUI);

        echo "Código: " . $cliente->getCodigo() . "<br>";
        echo "Nombre: " . $cliente->getNombre() . "<br>";
        echo "Email: " . $cliente->getEmail() . "<br>";
        echo "DUI: " . $cliente->getDUI() . "<br>";
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
}
?>
