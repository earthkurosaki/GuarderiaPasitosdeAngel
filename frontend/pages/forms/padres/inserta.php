<?php

include 'conecta.php';

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
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

session_start();
$_SESSION['nombre'] = $nombre;

$sqlinsert = "INSERT INTO tutores VALUES (0, '$nombre', '$apellido', '$fechanac', '$cedula', '$trabajo', '$cargo', '$nivel', '$profesion', '$direccion', '$telefono', '$email', '$estado')";

$resultado = mysqli_query($mysqli, $sqlinsert);

if($resultado){
    header("location: admin2.php");  
} else {
    echo "Error: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>
