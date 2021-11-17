<?php


if ( isset( $_POST['enviar'] ) ) {
$para = "rodinzon@gmail.com";
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$headers = "From: " . $correo;

$envio = "Nombre: " . $nombre "\n\n" . "apellidos: " . $apellidos . "\n\n" . "Correo: " . $correo . "\n\n" . "Telefono: " . $telefono . "\n\n" . "Mensaje: " . $mensaje "\n\n";

mail($para, $nombre, $envio, $headers);
echo "Correo Enviado";

}
