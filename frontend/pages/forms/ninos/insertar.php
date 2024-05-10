<?php
include 'conectarBD.php'; 

$nombre= $_POST['nombre'];
$fechanac= $_POST['fechanac'];
$edad= $_POST['edad']; 
$nacionalidad= $_POST['nacionalidad']; 
$genero= $_POST['genero']; 
$modnacer= $_POST['modnacer']; 
$canthermanos= $_POST['canthermanos']; 
$alergias= $_POST['alergias']; 
$especificacion= $_POST['especificacion']; 
$nivedu= $_POST['nivedu']; 

$sqlinsert = "INSERT into ninos VALUES (0,'$nombre', '$fechanac', '$edad', '$nacionalidad',
                                          '$genero', '$modnacer', '$canthermanos', '$alergias', 
                                          '$especificacion', '$nivedu')"; 

mysqli_query($mysqli, $sqlinsert); 

header("location:./index.php?insert=success"); 

?>