<?php
class Guitarra {
private $marca;
private $modelo;
private $numeroCuerdas;
private $tono;

public function __construct($marca, $modelo, $numeroCuerdas, $tono) {
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->numeroCuerdas = $numeroCuerdas;
    $this->tono = $tono;
}

public function getMarca() {
    return $this->marca;
}

public function afinar() {
    return "La guitarra " . $this->marca . " " . $this->modelo . " está afinada en " . $this->tono;
}

public function cambiarCuerdas($numeroCuerdas) {
    $this->numeroCuerdas = $numeroCuerdas;
    return "Se han cambiado las cuerdas de la guitarra " . $this->marca . " " . $this->modelo . " por " . $numeroCuerdas . " cuerdas";
}

public function tocar() {
    return "Se está tocando la guitarra " . $this->marca . " " . $this->modelo . " con " . $this->numeroCuerdas . " cuerdas";
}
}
>

