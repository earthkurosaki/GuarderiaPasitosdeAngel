<?php

include_once 'conectar_bd.php';
$id = $_POST['id_nin'];

if (isset($_POST['update'])) {

    $id = $_GET['id_nino'];

    $query = "UPDATE `nino` SET nombre='$_POST[nombre]', apellido='$_POST[apellido]', fecha_nac='$_POST[fechanac]', edad='$_POST[edad]', nacionalidad='$_POST[nacionalidad]', genero='$_POST[genero]', modo_nacer='$_POST[modnacer]', cant_hermanos='$_POST[canthermanos]', niv_educativo='$_POST[nivedu]', alergia='$_POST[alergias]', desc_alergia='$_POST[descalergia]', discapacidad='$_POST[discapacidad]', desc_discapacidad='$_POST[descdiscapacidad]' where id_nino='$_POST[id_nino]'";
    mysqli_query($mysqli, $query);

}

header("location:./ninos.php?insert=success");

?>