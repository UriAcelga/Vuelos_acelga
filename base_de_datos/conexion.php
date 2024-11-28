<?php
$host = 'localhost';
$user = 'user_prog3';
$pwd = '123a321';
$database = 'vuelos_acelga';

mysqli_report(MYSQLI_REPORT_OFF);

$conexion = new mysqli($host, $user, $pwd, $database);
if($conexion->connect_errno && !$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
mysqli_set_charset($conexion, 'utf8mb4');