<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['usuario_id'])) {
    header("Location: pag18.php");
    exit();
}

$id_usuario  = $_SESSION['usuario_id'];
$id_cancha   = (int)($_POST['id_cancha'] ?? 0);
$fecha       = $_POST['fecha'] ?? '';
$hora_inicio = (int)($_POST['hora'] ?? 0);
$hora_fin    = $hora_inicio + 1;
$equipo      = trim($_POST['equipo'] ?? '');
$extras      = implode(", ", $_POST['extras'] ?? []);

if ($id_cancha === 0 || $fecha === '') {
    header("Location: pag3.php");
    exit();
}
$stmt = $conexion->prepare("SELECT id_reserva FROM reserva WHERE id_cancha = ? AND fecha = ? AND hora_inicio = ?");
$stmt->bind_param("isi", $id_cancha, $fecha, $hora_inicio);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    header("Location: pag12.php");
    exit();
}

$stmt = $conexion->prepare("INSERT INTO reserva (id_usuario, id_cancha, fecha, hora_inicio, hora_fin, extras, equipo) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iisiiss", $id_usuario, $id_cancha, $fecha, $hora_inicio, $hora_fin, $extras, $equipo);

if (!$stmt->execute()) {
    header("Location: pag12.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva exitosa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="Barra">
            <p class="logo1">DOBLE</p>
            <p class="logo2">5</p>
            <a class="inicio" href="pag1.php">Inicio</a>
            <a class="canchas" href="pag3.php">Canchas</a>
            <a class="menu" href="pag2.php">Menú</a>
            <a class="contacto" href="pag16.php">Contacto</a>
            <a class="perfil" href="pag23.php">Perfil</a>
            <a class="reservar" href="pag24.php">Mis reservas</a>
        </nav>
    </header>
    <main>
        <div class="ok151">
            <div class="circulo151">
                <p>OK</p>
            </div>
        </div>
        <h1 class="titulo151">¡Reserva confirmada!</h1>
        <p class="subtitulo151">¡Gracias por elegirnos!</p>
        <a class="texto151" href="pag1.php">Volver al inicio</a>
    </main>
</body>
</html>