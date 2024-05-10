<?php
include 'conectar_bd.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fechanac = $_POST['fechanac'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$nacionalidad = $_POST['nacionalidad'];
$modo_nacer = $_POST['modo_nacer'];
$canthermanos = $_POST['canthermanos'];
$nivedu = $_POST['nivedu'];
$alergia = $_POST['alergia'];
$desc_alergia = $_POST['desc_alergia'];
$discapacidad = $_POST['discapacidad'];
$desc_discapacidad = $_POST['desc_discapacidad'];

$sqlinsert = "INSERT INTO nino (nombre, apellido, fecha_nac, edad, genero, nacionalidad, modo_nacer, cant_hermanos, niv_educativo, alergia, desc_alergia, discapacidad, desc_discapacidad) VALUES ('$nombre', '$apellido', '$fechanac', '$edad', '$genero', '$nacionalidad', '$modo_nacer', '$canthermanos', '$nivedu', '$alergia', '$desc_alergia', '$discapacidad', '$desc_discapacidad')";

mysqli_query($mysqli, $sqlinsert);

header("location:./ninos.php?insert=success");

?>