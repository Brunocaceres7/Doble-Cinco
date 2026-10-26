<?php
session_start();
include("conexion.php");

$nombre   = trim($_POST['nombre'] ?? '');
$apellido = trim($_POST['apellido'] ?? '');
$email    = trim($_POST['email'] ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$password = $_POST['password'] ?? '';

if ($nombre === '' || $apellido === '' || $email === '' || $password === '') {
    header("Location: pag21.php");
    exit();
}

$stmt = $conexion->prepare("SELECT id_usuario FROM Usuario WHERE email = ? LIMIT 1");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    header("Location: pag21.php");
    exit();
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conexion->prepare("INSERT INTO Usuario (nombre, apellido, email, telefono, contrasena) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nombre, $apellido, $email, $telefono, $hash);

if ($stmt->execute()) {
    $_SESSION['usuario_id'] = $conexion->insert_id;
    $_SESSION['nombre']     = $nombre;
    $_SESSION['email']      = $email;
    $_SESSION['telefono']   = $telefono;
    header("Location: pag22.php");
    exit();
}

die("Error SQL: " . $stmt->error);
?>