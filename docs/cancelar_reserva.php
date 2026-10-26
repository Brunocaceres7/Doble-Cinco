<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['usuario_id'])) {
    header("Location: pag18.php");
    exit();
}

$id_usuario = $_SESSION['usuario_id'];
$id_reserva = (int)($_POST['id_reserva'] ?? 0);

$stmt = $conexion->prepare("DELETE FROM reserva WHERE id_reserva = ? AND id_usuario = ?");
$stmt->bind_param("ii", $id_reserva, $id_usuario);
$stmt->execute();

header("Location: pag24.php");
exit();
?>
