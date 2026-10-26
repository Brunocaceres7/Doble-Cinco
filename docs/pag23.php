<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: pag18.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil</title>
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
        <div class="contenedor231">
            <div class="columnaizq231">
                <h1 class="titulo231">Mi Perfil</h1>
                <div class="cuadro231">
                    <p class="texto231">Usuario</p>
                    <p class="subtexto231"><?php echo htmlspecialchars($_SESSION['nombre']); ?></p>
                </div>
                <div class="cuadro232">
                    <p class="texto232">Correo electrónico</p>
                    <p class="subtexto232"><?php echo htmlspecialchars($_SESSION['email']); ?></p>
                </div>
                <div class="cuadro233">
                    <p class="texto233">Número de teléfono</p>
                    <p class="subtexto233"><?php echo htmlspecialchars($_SESSION['telefono']); ?></p>
                </div>
                <a href="cerrar_sesion.php" class="cerrarsesion">Cerrar sesión</a>
            </div>
            <div class="avatar231">
                <img src="fotodeperfil.png" alt="foto de perfil">
            </div>
        </div>
    </main>
</body>
</html>
