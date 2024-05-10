<?php

include 'conecta.php';

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$rp= $_POST['rp'];
$fechanac= $_POST['fechanac'];
$cedula= $_POST['cedula'];
$trabajo= $_POST['trabajo'];
$cargo= $_POST['cargo'];
$nivel= $_POST['nivel'];
$profesion= $_POST['profesion'];
$direccion= $_POST['direccion'];
$telefono= $_POST['telefono'];
$email= $_POST['email'];
$estado= $_POST['estado'];
$nino= $_POST['nino'];


$sqlinsert = "INSERT INTO tutores VALUES (0, '$nombre', '$apellido', '$rp', '$fechanac', '$cedula', '$trabajo', '$cargo', '$nivel', '$profesion', '$direccion', '$telefono', '$email', '$estado', '$nino');";

mysqli_query($mysqli, $sqlinsert);

header ("location:./padres.php?insert=success");
?>