<?php
$host = 'localhost';      
$username = 'root';     
$password = 'password';       
$db = 'database';
$conn = new mysqli($host, $username, $password, $db);
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

