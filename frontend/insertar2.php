<?php
include 'conectarBD2.php'; 

$nombre= $_POST['nombre'];
$email= $_POST['correo'];
$telefono= $_POST['telefono']; 
$message= $_POST['mensaje']; 


$sqlinsert = "INSERT INTO contactanos (nombre, correo, telefono, mensaje) VALUES ('$nombre', '$email', '$telefono', '$message')";


if(mysqli_query($mysqli, $sqlinsert)) {
    // Redireccionar a la página principal después de la inserción
    header("location:./index.php?insert=success");
} else {
// Manejar el caso en el que no se han enviado datos del formulario
echo "Error: No se han enviado datos del formulario.";
}
?>