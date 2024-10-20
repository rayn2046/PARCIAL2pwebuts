<?php class Reloj {
private $hora;
private $minuto;
private $segundo;
private $formato;

public function __construct($hora, $minuto, $segundo, $formato) {
    $this->hora = $hora;
    $this->minuto = $minuto;
    $this->segundo = $segundo;
    $this->formato = $formato;
}

public function getHora() {
    return $this->hora;
}

public function getTiempo() {
    return $this->hora . ":" . $this->minuto . ":" . $this->segundo;
}

public function setFormato($formato) {
    $this->formato = $formato;
}

public function mostrarTiempo() {
    if ($this->formato == "12h") {
return $this->hora . ":" . $this->minuto . ":" . $this->segundo . " " . ($this->hora < 12 ? "AM" : "PM");
    } else {
return $this->hora . ":" . $this->minuto . ":" . $this->segundo;
    }
}
}
>