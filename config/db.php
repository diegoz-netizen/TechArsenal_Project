<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "tech_arsenal";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>