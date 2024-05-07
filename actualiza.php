<?php

include_once 'conectarBD.php';
$id_padres = $_POST['id_padres'];
//echo $id_padres;

if(isset($_POST['update'])){

    $id_padres = $_POST['id_padres'];

    $query = "UPDATE padres SET nombres='$_POST[nombres]',Apellidos='$_POST[Apellidos]',cedula='$_POST[cedula]',nacionalidad='$_POST[nacionalidad]',telefono='$_POST[telefono]',direccion='$_POST[direccion]',correo_electronico='$_POST[correo_electronico]',parentesco='$_POST[parentesco]' where id_padres='$_POST[id_padres]'";
    mysqli_query($mysqli, $query);
   
}
 //echo mysqli_error (conn);
 header("location: ./padres.php?update=success");

?>