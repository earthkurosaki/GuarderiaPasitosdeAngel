<?php
$mysqli= new mysqli("localhost", "root", "12345678", "proyecto_final");

if ($mysqli->connect_errno) {
    echo "Ya tu sabe: (". $mysqli->connect_errno . ") " . $mysqli->connect_errno; 
}; 
?>