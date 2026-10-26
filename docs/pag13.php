<?php
$cancha = $_GET['cancha'] ?? '';
$dia = $_GET['dia'] ?? '';
$horario = $_GET['horario'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extras</title>
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
        <div class="contenedor21">
            <div class="columnaizq8">
                <h1 class="titulo131">Extras</h1>
                <p class="paso131">Paso 2 de 3</p>
                <div class="linea131">
                    <div class="linea132"></div>
                </div>
                <p class="subtitulo131">Suma lo que necesiten</p>
                <form action="pag14.php" method="POST">
                    
                    <input type="hidden" name="cancha" value="<?php echo $cancha; ?>">
                    <input type="hidden" name="dia" value="<?php echo $dia; ?>">
                    <input type="hidden" name="horario" value="<?php echo $horario; ?>">

                    <label class="cuadro131">
                        <input type="checkbox" name="extras[]" value="Pelota" class="checkbox-extra">
                        <p>Pelota</p>
                    </label>
                    <label class="cuadro131">
                        <input type="checkbox" name="extras[]" value="Chalecos" class="checkbox-extra">
                        <p>Chalecos</p>
                    </label>
                    <label class="cuadro131">
                        <input type="checkbox" name="extras[]" value="Arbitro" class="checkbox-extra">
                        <p>Árbitro</p>
                    </label>
                    <button type="submit" class="cuadro135">Continuar</button>
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