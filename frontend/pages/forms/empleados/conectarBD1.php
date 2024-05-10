<?php
$mysqli= new mysqli("localhost", "root", "12345678", "guarderia");

if ($mysqli->connect_errno) {
    echo "ER gueso: (". $mysqli->connect_errno . ") " . $mysqli->connect_errno; 
}; 
?>