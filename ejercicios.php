<?php
require_once ("database.php");
require_once ("api.php");
$ejercicios = getRandomExercises(5);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/ejercicios.css">
    <script src="general.js"></script>
</head>

<body>
    <div>
        <h2>
            Ejercicios
        </h2>
    </div>
    <hr>
    <input type="button" name="check" value="Otros ejercicios" onclick="recargar()">
    <div>
        <li class="ejercicio"></li>
        <li class="ejercicio"></li>
        <li class="ejercicio"></li>
        <li class="ejercicio"></li>
        <li class="ejercicio"></li>
    </div>
    <input id="btnCorregir" type="button" name="check" value="Corregir" onclick="corregir()">


    <script>
        var ejercicios = <?php echo json_encode($ejercicios); ?>;
        var soluciones = [];

        ejercicios.forEach(function (ejercicio, index) {
            // Enunciado
            var enunciadoCrudo = ejercicio.nombre;
            var enunciadoHTML = "<p>" + enunciadoCrudo + "</p>";
            enunciadoHTML = enunciadoHTML.replace(/xx/g, '<input type="text"><span class="correccion cursiva"></span>');
            var ejercicioElement = document.getElementsByClassName('ejercicio')[index];
            ejercicioElement.innerHTML = enunciadoHTML;

            // Solución
            var solucion = ejercicio.solucion;
            solucion.split(";").forEach(function (solParcial) {
                soluciones.push(solParcial);
            });
        });

    </script>
</body>

</html>