<?php
include_once 'conectarBD.php';

$id = $_GET['rn'];
$query = "DELETE FROM ninos WHERE id = '$id'";

$data = mysqli_query($mysqli, $query);
header("location: ./index.php?insert=succes");
?>