<?php

$destino="losmezza.2012@hotmail.com";
$nombre = $_POST["nombre"];      
$correo = $_POST["correo"]; 
$telefono = $_POST["telefono"]; 
$mensaje = $_POST["mensaje"]; 
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono:" . $telefono . "\nMensaje: " . $mensaje;
mail($destino,"Contacto", $contenido);
header("Location: index.html");

?>