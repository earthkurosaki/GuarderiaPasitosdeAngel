<?php
$mysqli= new mysqli("localhost", "root", "12345678", "guarderia1");

if ($mysqli->connect_errno) {
    echo "No soporto: (". $mysqli->connect_errno . ") " . $mysqli->connect_errno; 
}; 
?>