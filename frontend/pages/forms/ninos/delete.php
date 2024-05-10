<?php
include_once 'conectar_bd.php';

$id = $_GET['sn'];
$query = "DELETE FROM nin WHERE id_nino = '$id'";

$data = mysqli_query($mysqli, $query);
header("location: ./ninos.php?insert=succes");
?>