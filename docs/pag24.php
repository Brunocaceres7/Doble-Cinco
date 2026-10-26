<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['usuario_id'])) {
    header("Location: pag18.php");
    exit();
}

$id_usuario = $_SESSION['usuario_id'];

$stmt = $conexion->prepare("SELECT id_reserva, id_cancha, fecha, hora_inicio, hora_fin, extras, equipo FROM reserva WHERE id_usuario = ? ORDER BY fecha DESC, hora_inicio");
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$reservas = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis reservas</title>
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
        <div class="contenedor21">
            <div class="columnaizq241">
                <h1 class="titulo241">Mis reservas</h1>
                <?php while ($r = $reservas->fetch_assoc()): ?>
                    <div class="cuadro241">
                        <p class="cancha241">Cancha <?php echo $r['id_cancha']; ?></p>
                        <p class="fecha241"><?php echo date('d/m/Y', strtotime($r['fecha'])); ?> - <?php echo $r['hora_inicio']; ?>:00 a <?php echo $r['hora_fin']; ?>:00</p>
                        <p class="extras241">Extras: <?php echo htmlspecialchars($r['extras']); ?></p>
                        <p class="equipo241">Equipo: <?php echo htmlspecialchars($r['equipo']); ?></p>
                        <form action="cancelar_reserva.php" method="POST">
                            <input type="hidden" name="id_reserva" value="<?php echo $r['id_reserva']; ?>">
                            <button type="submit" class="botoncancelar241">Cancelar reserva</button>
                        </form>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="cuadro21">
                <div class="horizontal21">
                    <p class="reservatranqui">Reservá con tranquilidad</p>
                    <div class="texto21">
                        <div class="circulo21"></div>
                        <p class="cancela21">Cancelás gratis hasta 4 horas antes</p>
                    </div>
                    <div class="texto22">
                        <div class="circulo22"></div>
                        <p class="pagas21">Págas seguro con Mercado Pago</p>
                    </div>
                    <div class="texto23">
                        <div class="circulo22"></div>
                        <p class="confirmacion21">Confirmación por WhatsApp</p>
                    </div>
                    <div class="texto24">
                        <div class="circulo23"></div>
                        <p class="atencion21">Atención todos los días de 9hs a 00hs</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
