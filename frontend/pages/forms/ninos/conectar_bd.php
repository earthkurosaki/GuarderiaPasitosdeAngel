<?php
$mysqli= new mysqli("localhost", "root", "14160929", "guarderia");

if ($mysqli->connect_errno) {
    echo "No soporto: (". $mysqli->connect_errno . ") " . $mysqli->connect_errno; 
}; 
?>