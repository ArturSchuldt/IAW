<?php
/* $_GET es la dirección que hace referencia al 'nombre' en index.html*/ 
$nombre = $_GET['nombre'];
$asunto = $_GET['asunto'];
$mensaje = $_GET['mensaje'];
echo "<h2>Información recibida desde PHP</h2>";
echo "El nombre recibido es: " . $nombre . "</br>";
echo "El asunto recibido es: " . $asunto . "</br>";
echo "El nombre mensaje es: " . $mensaje . "</br>";
?>
