
<?php

include('conecta.php');

($nombre = ($_POST['nombre']));
($contrasena = ($_POST['contrasena']));

session_start();
$_SESSION['nombre']= $nombre;

$consult = "SELECT * FROM usuario where nombre = '$nombre' and contrasena = '$contrasena' and tipo_usuario = 'admin'";
$resultad = mysqli_query($mysqli,$consult); 
$fis = mysqli_num_rows($resultad);

if($fis){
   header("location:admin.php");  
}

else{
    ?>
<?php
    include("index.php");
    ?>
<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
<?php
}
mysqli_free_result($resultad);
mysqli_close($mysqli);
?>