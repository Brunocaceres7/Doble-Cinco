<?php
session_start();

if (isset($_SESSION["usuario_id"])) {
    header("Location: pag22.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="Barra">
            <p class="logo1">DOBLE</p>
            <p class="logo2">5</p>
            <a class="inicio" href="#">Inicio</a>
            <a class="canchas" href="#">Canchas</a>
            <a class="menu" href="#">Menú</a>
            <a class="contacto" href="#">Contacto</a>
            <a class="perfil" href="#">Perfil</a>
            <a class="reservar" href="#">Reservar</a>
        </nav>
    </header>
    <main>
        <h1 class="titulo191">Iniciar sesión</h1>
        <h2 class="subtitulo191">Ingresá con tu cuenta</h2>
        <a class="boton191" href="pag18.php">Iniciar sesión</a>
        <p class="boton192">Crear cuenta</p>
        <form method="POST" action="validar_cuenta.php">
            <label>
                <input type="email" id="email" name="email" class="inputemail191" placeholder="Correo electrónico">
            </label>
            <label>
                <input type="password" id="password" name="password" class="inputpassword191" placeholder="Contraseña">
            </label>
            <label>
                <input type="number" id="telefono" name="telefono" class="inputtelefono191" placeholder="Número de teléfono">
            </label>
            <label>
                <input type="text" id="nombre" name="nombre" class="inputnombre191" placeholder="Nombre">
            </label>
            <label>
                <input type="text" id="apellido" name="apellido" class="inputapellido191" placeholder="Apellido">
            </label>
            <button type="submit" class="botoncrear191">Crear</button>
        </form>
        
    </main>
</body>
</html>
