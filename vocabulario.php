<?php
require_once ("database.php");
require_once ("api.php");
$palabras = getRandomNouns(20);
$palabras_json = json_encode($palabras);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocabulario</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/vocabulario.css">
    <script src="general.js"></script>
</head>

<body>
    <input type="button" name="check" value="Nuevas palabras" onclick="recargar()">
    <a class="buttonLike" href="vocabularioR.php">Sentido inverso</a>
    <div>
        <div>
            <h2>Vocabulario</h2>
        </div>
        <hr>
        <table>
            <?php
            $count = count($palabras);
            $newRow = ($count > 10);

            $iteration = 0;

            foreach ($palabras as $palabra) {
                $nombre = $palabra["nombre"];
                if ($iteration % 2 == 0 && $newRow) {
                    echo "<tr>";
                }

                echo "<td>$nombre</td>";
                echo "<td><input type='text'></td>";
                echo "<td><span class='correccion'></span></td>";

                if ($newRow && $iteration % 2 == 1) {
                    echo "</tr>";
                }

                $iteration++;
            }

            // If the loop ends with an odd number of iterations, close the row
            if ($newRow && $iteration % 2 == 1) {
                echo "<td></td><td></td><td></td>"; // Empty cells to fill the row
                echo "</tr>";
            }
            ?>
        </table>
        <br>
    </div>
    <input id="btnCorregir" type="button" name="check" value="Corregir" onclick="corregir()">
    <p class="cursiva">Nota: puede que la palabra que tú utilices para traducir no sea la misma de la solución pero signifique lo
        mismo.</p>

    <script>
        var palabras = <?php echo $palabras_json; ?>;
        var soluciones = [];
        for (var palabra of palabras) {
            soluciones.push(palabra["traduccion"]);
        }
    </script>
</body>

</html>