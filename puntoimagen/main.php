
<?php
$reloj = new Reloj(12, 30, 45, "12h");
echo $reloj->getHora(); // 12
echo $reloj->getTiempo(); // 12:30:45
$reloj->setFormato("24h");
echo $reloj->mostrarTiempo(); // 12:30:45

?>


<?php $guitarra = new Guitarra("Fender", "Stratocaster", 6, "Mi");
echo $guitarra->getMarca(); // Fender
echo $guitarra->afinar(); // afinada en Mi
$guitarra->cambiarCuerdas(7);
echo $guitarra->tocar(); // Se está tocando
?>