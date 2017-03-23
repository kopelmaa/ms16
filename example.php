<?php

$server = "localhost";
$user = "root";
$pass = "";

$conn = new mysqli($server, $user, $pass);

if (!$conn) {
    
    die("Ühendust pole " . msqli_connect_error());
} echo "Jaii! Kontakteerusin";

?>