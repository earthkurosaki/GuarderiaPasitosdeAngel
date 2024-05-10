<?php

include_once 'conectarBD1.php';
$id_empleados = $_POST['id_empleados'];


if (isset($_POST['update']))

    $id_empleados = $_POST['id_empleados'];

$query = "UPDATE `empleados` SET nombre='$_POST[nombre]', apellido='$_POST[apellido]', cedula='$_POST[cedula]', fechanac='$_POST[fechanac]', genero='$_POST[genero]', direccion='$_POST[direccion]', telefono='$_POST[telefono]', correo_electronico='$_POST[correo_electronico]', fechaingreso='$_POST[fechaingreso]', horariolabo='$_POST[horariolabo]', foracademica='$_POST[foracademica]', teleemergencia11='$_POST[teleemergencia11]' where id_empleados='$_POST[id_empleados]'";


if (mysqli_query($mysqli, $query)) {
    // Redireccionar a la página principal después de la inserción
    header("location:./registrosdelete.php?insert=success");
} else {
    // Manejar el caso en el que no se han enviado datos del formulario
    echo "Error: No se han actualizado datos del formulario.";
}
