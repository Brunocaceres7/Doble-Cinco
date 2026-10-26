<?php
session_start();
include("conexion.php");

$email    = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if ($email === '' || $password === '') {
    header("Location: pag21.php");
    exit();
}

$stmt = $conexion->prepare("SELECT id_usuario, nombre, email, telefono, contrasena FROM Usuario WHERE email = ? LIMIT 1");
$stmt->bind_param("s", $email);
$stmt->execute();
$usuario = $stmt->get_result()->fetch_assoc();

if ($usuario && password_verify($password, $usuario['contrasena'])) {
    $_SESSION['usuario_id'] = $usuario['id_usuario'];
    $_SESSION['nombre']     = $usuario['nombre'];
    $_SESSION['email']      = $usuario['email'];
    $_SESSION['telefono']   = $usuario['telefono'];
    header("Location: pag1.php");
    exit();
}

header("Location: pag21.php");
exit();
?>