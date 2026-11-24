<?php
header("Content-Type: application/json; charset=UTF-8");
include 'conexion.php';

$resultado = $conexion->query("SELECT * FROM destinos");
$destinos = array();

while ($row = $resultado->fetch_assoc()) {
    $destinos[] = $row;
}

echo json_encode(array("status" => "success", "data" => $destinos));
?>