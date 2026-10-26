<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "trabajo_final";

    $conexion = new mysqli($host, $user, $pass, $dbname);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->conexionect_error);
    }
    echo "Conexión exitosa";
?>