<?php
class Cliente {
    private $codigo;
    private $nombre;
    private $email;
    private $DUI;

    public function __construct($codigo, $nombre, $email, $DUI) {
        $this->setCodigo($codigo);
        $this->setNombre($nombre);
        $this->setEmail($email);
        $this->setDUI($DUI);
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
        if (preg_match("/\d|\W/", $nombre)) {
            throw new Exception("no se permiten caracteres especiales ");
        }
        $this->nombre = $nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("El email no es válido.");
        }
        $this->email = $email;
    }

    public function getDUI() {
        return $this->DUI;
    }

    public function setDUI($DUI) {
        if (!preg_match("/^\d{8}-\d{1}$/", $DUI)) {
            throw new Exception("su DUI no es válido.");
        }
        $this->DUI = $DUI;
    }
}
?>