<?php
require_once ("database.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ludiscium</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/index.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap');
    </style>
    <script src="general.js"></script>
</head>

<body>
    <button id="cambiarTema" onclick="cambiarTema()">Cambiar tema</button>
    <div id="titulo" class="leckerli-one">Ludiscium</div>
    <div id="envoltorio">
        <div>
            <a href="sustantivos.php" class="button">Sustantivos</a>
            <a href="verbos.php" class="button">Verbos</a>
        </div>
        <br>
        <div>
            <a href="pronombres.php" class="button">Personales</a>
            <a href="demostrativos.php" class="button">Demostrativos</a>
            <a href="relativos.php" class="button">Relativos</a>
        </div>
        <br>
        <div>
            <a href="vocabulario.php" class="button">Vocabulario</a>
            <a href="ejercicios.php" class="button">Ejercicios</a>
            <a href="gramatica.php" class="button">Gramática</a>
        </div>
    </div>
    <div id="footer1">
        <p>Ludiscium: con base en los apuntes de Eduardo del Pino</p>
        <p>Una iniciativa de Gonzalo de la Rosa Palacio</p>
    </div>
    <div id="footer2">
        <p>© Todos los derechos reservados</p>
    </div>

    <script>
        insertarTema(document.getElementById("titulo"));
        insertarTema(document.getElementById("envoltorio"));
        insertarTema(document.getElementById("cambiarTema"));
        insertarTema(document.getElementById("footer1"));
        insertarTema(document.getElementById("footer2"));
    </script>

    <body>


</html>