<?php 
include("conecta.php");

        
	    $nombre = trim($_POST['nombre']);
	    $contrasena = trim($_POST['contrasena']);
	    $correo = trim($_POST['correo']);

	    $consulta = "INSERT INTO usuario VALUES (0, '$nombre', '$contrasena', '', '$correo');";


        mysqli_query($mysqli, $consulta);

    header ("location:./login.php?insert=success");
	  
?>
