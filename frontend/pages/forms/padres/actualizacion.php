<?php

include_once 'conecta.php';
$id_tutor = $_POST['id_tutor'];


if (isset($_POST['update']))

    $id_tutor = $_POST['id_tutor'];

$query = "UPDATE `tutores` SET nombre='$_POST[nombre]', apellido='$_POST[apellido]', relacion_parental='$_POST[relacion_parental]', fechanac='$_POST[fechanac]', cedula='$_POST[cedula]', lugar_trabajo='$_POST[lugar_trabajo]', cargo='$_POST[cargo]', nivel_academico='$_POST[nivel_academico]', profesion='$_POST[profesion]', direccion='$_POST[direccion]', telefono='$_POST[telefono]', email='$_POST[email]',  estado_civil='$_POST[estado_civil]' where id_tutor='$_POST[id_tutor]';";


if (mysqli_query($mysqli, $query)) {
    // Redireccionar a la página principal después de la inserción
    header("location:./prueba.php?insert=success");
} else {
    // Manejar el caso en el que no se han enviado datos del formulario
    echo "Error: No se han actualizado datos del formulario.";
}
