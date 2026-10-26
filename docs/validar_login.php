<?php
session_start();
include("conexion.php");

$email    = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (!empty($email) && !empty($password)) {
    $query  = "SELECT * FROM usuarios WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conexion, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $usuario = mysqli_fetch_assoc($result);

        if ($password === $usuario['password']) {
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['nombre']     = $usuario['nombre'];
            $_SESSION['email']      = $usuario['email'];

            header("Location: pag1.php");
            exit();
        } else {
            // Contraseña incorrecta a pag21.php
            header("Location: pag21.php");
            exit();
        }
    } else {
        // Correo no encontrado a pag21.php
        header("Location: pag21.php");
        exit();
    }
} else {
    header("Location: pag21.php");
    exit();
}
?>
