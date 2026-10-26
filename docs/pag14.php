<?php 
$cancha  = $_POST['cancha']  ?? '';
$dia     = $_POST['dia']     ?? '';
$horario = $_POST['horario'] ?? '';
$extras  = $_POST['extras']  ?? array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="Barra">
            <p class="logo1">DOBLE</p>
            <p class="logo2">5</p>
            <a class="inicio" href="pag1.php">Inicio</a>
            <a class="canchas" href="pag13.php">Canchas</a>
            <a class="menu" href="pag2.php">Menú</a>
            <a class="contacto" href="pag16.php">Contacto</a>
            <a class="perfil" href="pag23.php">Perfil</a>
            <a class="reservar" href="pag3.php">Reservar</a>
        </nav>
    </header>
    <main>
        <div class="contenedor21">
            <div class="columnaizq8">
                <h1 class="titulo131">Datos </h1>
                <p class="paso141">Paso 3 de 3</p>
                <div class="linea141">
                    <div class="linea142"></div>
                </div>
                <form action="pag15.php" method="POST" class="formulario14">

                <input type="hidden" name="cancha" value="<?php echo $cancha; ?>">
                <input type="hidden" name="dia" value="<?php echo $dia; ?>">
                <input type="hidden" name="horario" value="<?php echo $horario; ?>">

                <?php foreach ($extras as $extra): ?>
                    <input type="hidden" name="extras[]" value="<?php echo $extra; ?>">
                <?php endforeach; ?>

                    <label>
                        <input type="text" name="nombre" class="inputnombre" placeholder="Nombre y Apellido">
                    </label>
                    <label>
                        <input type="number" name="numtel" class="inputnumtel" placeholder="Número de teléfono">
                    </label>
                    <label>
                        <input type="text" name="equipo" class="inputequipo" placeholder="Nombre del equipo (Opcional)">
                    </label>
                    <button type="submit" class="cuadro135">Confirmar Reserva</button>
                </form>
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