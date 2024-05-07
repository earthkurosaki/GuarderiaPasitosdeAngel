<?php
include_once 'conectarBD.php';

$id = $_GET['rn'];
$query = "DELETE FROM padres WHERE id_padres = '$id'";

$data = mysqli_query($mysqli, $query);
header("location: ./padres.php?insert=succes");
?>