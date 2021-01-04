<?php 
$destino= "profesores@iepkarlfriedrichgauss.com.pe";
$nombrealumno =$_POST["nombrealumno"];
$correoalumno =$_POST["correoalumno"];
$nombredocente=$_POST["nombredocente"];
$nombrecurso =$_POST["nombrecurso"];
$contenido = "Nombre: " . $nombrealumno . "\nCorreo: " . $correoalumno . "\nDocente: " . $nombredocente . "\nCurso: " . $nombrecurso;
mail($destino, "Contacto", $contenido);
header("Location:iniciar.html");
?>
