<?php
include 'conectarBD1.php'; 

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$cedula= $_POST['cedula']; 
$fechanac= $_POST['fechanac']; 
$genero= $_POST['genero']; 
$direccion= $_POST['direccion']; 
$telefono= $_POST['telefono']; 
$correo_electronico= $_POST['correo_electronico']; 
$fechaingreso= $_POST['fechaingreso']; 
$horariolabo= $_POST['horariolabo']; 
$foracademica= $_POST['foracademica']; 
$teleemergencia11= $_POST['teleemergencia11']; 
$id_puesto= $_POST['id_puesto']; 

$sqlinsert = "INSERT INTO empleados (nombre, apellido, cedula, fechanac, genero, direccion, telefono, correo_electronico, fechaingreso, horariolabo, foracademica, teleemergencia11, id_puesto) VALUES ('$nombre', '$apellido', '$cedula', '$fechanac', '$genero', '$direccion ', '$telefono ', '$correo_electronico ', '$fechaingreso', '$horariolabo', '$foracademica ', '$teleemergencia11', '$id_puesto')";


if(mysqli_query($mysqli, $sqlinsert)) {
    // Redireccionar a la página principal después de la inserción
    header("location:./empleado.php?insert=success");
} else {
// Manejar el caso en el que no se han enviado datos del formulario
echo "Error: No se han enviado datos del formulario.";
}
?>