<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "empresa";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
