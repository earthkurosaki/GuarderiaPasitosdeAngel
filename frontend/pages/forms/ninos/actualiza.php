<?php

include_once 'conectarBD.php';
$id = $_POST['id'];

if(isset($_POST['update'])){

    $id = $_POST['id'];

    $query = "UPDATE `ninos` SET nombre='$_POST[nombre]', fecha_nac='$_POST[fechanac]', edad='$_POST[edad]', nacionalidad='$_POST[nacionalidad]', genero='$_POST[genero]', modo_nacer='$_POST[modnacer]', cant_hermanos='$_POST[canthermanos]', alergias='$_POST[alergias]', especificacion='$_POST[especificacion]', niv_educativo='$_POST[nivedu]' where id='$_POST[id]'";
    mysqli_query($mysqli, $query);
   
}

header("location: ./index.php?insert=success");

?>