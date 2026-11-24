<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $descripcion = $conexion->real_escape_string($_POST['descripcion']);
    $latitud = $conexion->real_escape_string($_POST['latitud']);
    $longitud = $conexion->real_escape_string($_POST['longitud']);
    $imagen = $conexion->real_escape_string($_POST['imagen']);

    // Insertar solo en los campos existentes en tu base de datos
    $sql = "INSERT INTO destinos (nombre, descripcion, latitud, longitud, imagen) 
            VALUES ('$nombre', '$descripcion', '$latitud', '$longitud', '$imagen')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: index.php?vista=lista");
        exit();
    } else {
        echo "Error al guardar: " . $conexion->error;
    }
}

$conexion->close();
?>