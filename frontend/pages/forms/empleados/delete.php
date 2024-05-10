<?php
include_once 'conectarBD1.php';

$id = $_GET['rn'];
$query = "DELETE FROM empleados WHERE id_empleados = '$id'";

$data = mysqli_query($mysqli, $query);
header("location: ./registrosdelete.php?insert=succes");
?>