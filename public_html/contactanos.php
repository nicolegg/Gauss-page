<?php 
$destino= "admision@iepkarlfriedrichgauss.com.pe";
$nombre =$_POST["nombre"];
$apellido =$_POST["apellido"];
$telefono=$_POST["telefono"];
$correo =$_POST["correo"];
$asunto =$_POST["asunto"];
$descripción =$_POST["descripción"];
$contenido = "\nNombre: " . $nombre . "\nApellido: " . $apellido . "\nTelefono: " . $telefono . "\nCorreo: " . $correo . "\nAsunto: " . $asunto . "\nDescripción: " . $descripción;
mail($destino, "Contacto", $contenido);
header("Location:contact.html");
?>
