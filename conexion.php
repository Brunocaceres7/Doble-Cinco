<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "trabajo_final";

    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    echo "Conexión exitosa";
?>