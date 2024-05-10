<?php
include_once 'conecta.php';

$id = $_GET['rn'];
$query = "DELETE FROM tutores WHERE id_tutor = '$id'";

$data = mysqli_query($mysqli, $query);
header("location: ./padres.php?insert=success");
?>