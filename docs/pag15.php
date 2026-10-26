<?php
include("conexion.php");

$cancha   = $_POST['cancha']   ?? '';
$dia      = $_POST['dia']      ?? '';
$horario  = $_POST['horario']  ?? '';
$nombre   = $_POST['nombre']   ?? '';
$telefono = $_POST['telefono'] ?? '';
$equipo   = $_POST['equipo']   ?? '';
$extras   = implode(", ", $_POST['extras'] ?? []);

if (!empty($nombre) && !empty($telefono)) {
    $stmt = $conn->prepare("INSERT INTO reservas (cancha, dia, horario, extras, nombre, telefono, equipo) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $cancha, $dia, $horario, $extras, $nombre, $telefono, $equipo);

    if (!$stmt->execute()) {
        echo "Error en la consulta: " . $stmt->error;
    }
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
            <a class="reservar" href="pag3.php">Reservar</a>
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