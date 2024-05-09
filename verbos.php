<?php
require_once ("database.php");
require_once ("api.php");
$verb = getRandomVerb();
// Arreglar que cada vez que cojo una nueva palabra se resetea a tiempo presente... → URL's y tal (?) → sitio dinámico con JQUERY
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verbos</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/verbos.css">
    <script src="general.js"></script>
</head>

<body>
    <div>
        <h2>
            Verbos
        </h2>
    </div>
    <hr>
    <nav>
        <button id="presente" class="tiempo" onclick="elegirTiempo('presente')">Presente</button>
        <button id="pretImp" class="tiempo" onclick="elegirTiempo('pretImp')">Pretérito imperfecto</button>
        <button id="futImp" class="tiempo" onclick="elegirTiempo('futImp')">Futuro imperfecto</button>
        <button id="pretPerf" class="tiempo" onclick="elegirTiempo('pretPerf')">Pretérito perfecto</button>
        <button id="futPerf" class="tiempo" onclick="elegirTiempo('futPerf')">Futuro perfecto</button>
        <button id="pretPlusc" class="tiempo" onclick="elegirTiempo('pretPlusc')">Pretérito pluscuamperfecto</button>
    </nav>
    <input type="button" name="check" value="Nueva palabra" onclick="recargar()">
    <li>
        <div>
            <h2 id="nombreLatin">
                <?php echo $verb["nombre"] ?>
            </h2>
            <button class="info-icon" onclick="mostrarConjugacion()">i</button>
            <p id="traduccion">
                <?php echo $verb["traduccion"] ?>
            </p>
        </div>
        <hr>
        <div class="declensionTestHolder">
            <table class="declensionTestTable">
                <tbody>
                    <tr>
                        <td class="cursiva">ego</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">tu</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">ille/a/ud</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                </tbody>
            </table>
            <table class="declensionTestTable">
                <tbody>
                    <tr>
                        <td class="cursiva">nos</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">vos</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">illi/ae/a</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <input id="btnCorregir" type="button" name="check" value="Corregir" onclick="corregir()">
    </li>


    <script>
        // 1: amo, 2: video, 3: cano, 4: audio, 5: capio
        // Obtenemos la raíz eliminando la última letra
        var raiz = "<?php echo substr($verb["nombre"], 0, -1) ?>";
        var conjugacion = <?php echo $verb["conjugacion"] ?>;

        // Desinencias PRESENTE
        var dPresente = [
            ["o", "as", "at", "amus", "atis", "ant"],
            ["o", "s", "t", "mus", "tis", "nt"],
            ["o", "is", "it", "imus", "itis", "unt"],
            ["o", "s", "t", "mus", "tis", "unt"],
            ["o", "s", "t", "mus", "tis", "unt"]
        ];

        // Desinencias PRETÉRITO IMPERFECTO
        var dPretImp = [
            ["abam", "abas", "abat", "abamus", "abatis", "abant"],
            ["bam", "bas", "bat", "bamus", "batis", "bant"],
            ["ebam", "ebas", "ebat", "ebamus", "ebatis", "ebant"],
            ["ebam", "ebas", "ebat", "ebamus", "ebatis", "ebant"],
            ["ebam", "ebas", "ebat", "ebamus", "ebatis", "ebant"]
        ];

        // Desinencias FUTURO IMPERFECTO
        var dFutImp = [
            ["abo", "abis", "abit", "abimus", "abitis", "abunt"],
            ["bo", "bis", "bit", "bimus", "bitis", "bunt"],
            ["am", "es", "et", "emus", "etis", "ent"],
            ["am", "es", "et", "emus", "etis", "ent"],
            ["am", "es", "et", "emus", "etis", "ent"]
        ];

        var dPretPerf = [
            ["avi", "avisti", "avit", "avimus", "avistis", "averunt"],
            ["i", "isti", "it", "imus", "istis", "erunt"],
            ["i", "isti", "it", "imus", "istis", "erunt"],
            ["vi", "visti", "vit", "vimus", "vistis", "verunt"],
            ["i", "isti", "it", "imus", "istis", "erunt"]
        ];
        var dFutPerf = [
            ["avero", "averis", "averit", "averimus", "averitis", "averint"],
            ["ero", "eris", "erit", "erimus", "eritis", "erint"],
            ["ero", "eris", "erit", "erimus", "eritis", "erint"],
            ["vero", "veris", "verit", "verimus", "veritis", "verint"],
            ["ero", "eris", "erit", "erimus", "eritis", "erint"]
        ];
        var dPretPlusc = [
            ["averam", "averas", "averat", "averamus", "averatis", "averant"],
            ["eram", "eras", "erat", "eramus", "eratis", "erant"],
            ["eram", "eras", "erat", "eramus", "eratis", "erant"],
            ["veram", "veras", "verat", "veramus", "veratis", "verant"],
            ["eram", "eras", "erat", "eramus", "eratis", "erant"]
        ];

        var soluciones;
        elegirTiempo("presente");

        function mostrarConjugacion() {
            alert("Este verbo pertenece a la " + conjugacion + ".ª conjugación");
        }

        function elegirTiempo(tiempo) {
            limpiarCampos();
            var nombreDesinencias = "d" + tiempo.charAt(0).toUpperCase() + tiempo.slice(1);
            desinenciasElegidas = window[nombreDesinencias];

            // Tratamos irregularidades (conjugaciones 3.ª y mixta)
            if (tiempo === "pretPerf" || tiempo === "futPerf" || tiempo === "pretPlusc") {
                switch (raiz) {
                    case "can":
                        raiz = "cecin";
                        break;
                    case "capi":
                        raiz = "cep";
                        break;
                    case "vide":
                        raiz = "vid";
                        break;
                }
            }

            // Creamos las soluciones
            soluciones = desinenciasElegidas[conjugacion - 1].map(desinencia => raiz + desinencia);

            // Marcamos el botón del tiempo actual y desmarcamos los otros
            Array.from(document.getElementsByClassName("tiempo")).forEach(function (elemento) {
                elemento.classList.remove('resaltar');
            });
            document.getElementById(tiempo).classList.add('resaltar');
        }

    </script>
</body>

</html>