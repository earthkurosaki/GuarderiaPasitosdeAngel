<?php
include 'conectar_bd.php';

// Verificar si se han enviado datos del formulario
if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['fechanac']) && isset($_POST['edad']) && isset($_POST['genero']) && isset($_POST['nacionalidad']) && isset($_POST['modo_nacer']) && isset($_POST['cantidad_hermanos']) && isset($_POST['nivel_educativo']) && isset($_POST['alergia']) && isset($_POST['desc_alergia']) && isset($_POST['discapacidad']) && isset($_POST['desc_discapacidad'])) {
    // Recuperar los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechanac = $_POST['fechanac'];
    $edad = $_POST['edad'];
    $genero = $_POST['genero'];
    $nacionalidad = $_POST['nacionalidad'];
    $modo_nacer = $_POST['modo_nacer'];
    $cantidad_hermanos = $_POST['cantidad_hermanos'];
    $nivel_educativo = $_POST['nivel_educativo'];
    $alergia = $_POST['alergia'];
    $desc_alergia = $_POST['desc_alergia'];
    $discapacidad = $_POST['discapacidad'];
    $desc_discapacidad = $_POST['desc_discapacidad'];

    // Insertar los datos en la tabla nino
    $sqlinsert = "INSERT INTO nino (nombre, apellido, fecha_nac, edad, genero, nacionalidad, modo_nacer, cantidad_hermanos, nivel_educativo, alergia, desc_alergia, discapacidad, desc_discapacidad) VALUES ('$nombre', '$apellido', '$fechanac', '$edad', '$genero', '$nacionalidad', '$modo_nacer', '$cantidad_hermanos', '$nivel_educativo', '$alergia', '$desc_alergia', '$discapacidad', '$desc_discapacidad')";
   
    if(mysqli_query($mysqli, $sqlinsert)) {
        // Redireccionar a la página principal después de la inserción
        header("location:./ninos.php?insert=success");
    } else {
        // Mostrar mensaje de error en caso de fallo
        echo "Error al insertar en la base de datos: " . mysqli_error($mysqli);
    }
} else {
    // Manejar el caso en el que no se han enviado datos del formulario
    echo "Error: No se han enviado datos del formulario.";
}
?>
