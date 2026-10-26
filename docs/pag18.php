<?php
session_start();
if (isset($_SESSION['usuario_id'])) {
    header("location: pag1.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
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
        <h1 class="titulo18">Iniciar sesión</h1>
        <h2 class="subtitulo">Ingresá con tu cuenta</h2>
        <p class="boton1">Iniciar sesión</p>
        <a class="boton2" href="pag19.php">Crear cuenta</a>
        <form action="validar_login.php" method="POST">
            <label>
                <input type="email" id="email" name="email" class="inputemail" placeholder="Correo electronico">
            </label>
            <label>
                <input type="password" id="password" name="password" class="inputpassword" placeholder="Contraseña">
            </label>
            <button type="submit" class="botonentrar">Entrar</button>
        </form>
    </main>
</body>
</html>