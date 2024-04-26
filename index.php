<?php
$nombre = $_GET['nombre'];
$correo = $_GET['correo'];
$mensaje = 'Hola, ' . $nombre . ' hemos registrado su correo electrónico correctamente '. $correo;
echo $mensaje;