<?php
$servidor = "db";
$usuario = "root";
$password = "123456";
$base_datos = "turismo_db";

$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
$conexion->set_charset("utf8");
?>