<?php
include 'conectarBD.php'; 

$nombres= $_POST['nombres'];
$Apellidos= $_POST['Apellidos'];
$cedula= $_POST['cedula']; 
$nacionalidad= $_POST['nacionalidad']; 
$telefono= $_POST['telefono']; 
$direccion= $_POST['direccion']; 
$correo_electronico= $_POST['correo_electronico']; 
$parentesco= $_POST['parentesco']; 

$sqlinsert = "INSERT into padres VALUES (0,'$nombres', '$Apellidos', '$cedula', '$nacionalidad', '$telefono', '$direccion', '$correo_electronico', '$parentesco');"; 

mysqli_query($mysqli, $sqlinsert); 

header("location:./padres.php?insert=success"); 

?>