<?php
include 'conectar_bd.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fechanac = $_POST['fechanac'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$nacionalidad = $_POST['nacionalidad'];
$modnacer = $_POST['modnacer'];
$canthermanos = $_POST['canthermanos'];
$nivedu = $_POST['nivedu'];
$alergia = $_POST['alergia'];
$desc_alergia = $_POST['desc_alergia'];
$discapacidad = $_POST['discapacidad'];
$desc_discapacidad = $_POST['desc_discapacidad'];

$sqlinsert = "INSERT into nino VALUES (0,'$nombre', '$apellido', '$fechanac', '$edad', '$genero', '$nacionalidad',
                                         '$modnacer', '$canthermanos', '$nivedu', '$alergia', '$desc_alergia',
                                         '$discapacidad', '$desc_discapacidad')";

mysqli_query($mysqli, $sqlinsert);

header("location:./ninos.php?insert=success");

?>