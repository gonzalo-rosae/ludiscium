<?php
require_once ("database.php");
require_once ("api.php");
$sustantivo = getRandomNoun();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustantivos</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/sustantivos.css">
    <script src="general.js"></script>
</head>

<body>
    <input type="button" name="check" value="Nueva palabra" onclick="recargar()">
    <li>
        <div>
            <h2 id="nombreLatin">
                <?php echo $sustantivo["nombre"] ?>
            </h2>
            <button class="info-icon" onclick="mostrarDeclinacion()">i</button>
            <p id="traduccion">
                <?php echo $sustantivo["traduccion"] ?>
            </p>
        </div>
        <hr>
        <div class="declensionTestHolder">
            <table class="declensionTestTable">
                <thead>
                    <tr>
                        <th class="cursiva">singular</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cursiva">nominativo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">vocativo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">acusativo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">genitivo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">dativo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">ablativo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                </tbody>
            </table>
            <table class="declensionTestTable">
                <thead>
                    <tr>
                        <th class="cursiva">plural</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td class="cursiva">nominativo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">vocativo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">acusativo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">genitivo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">dativo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">ablativo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                </thead>
            </table>
        </div>
        <input id="btnCorregir" type="button" name="check" value="Corregir" onclick="corregir()">
    </li>


    <script>
        var nombre = "<?php echo $sustantivo["nombre"] ?>";
        var declinacion = "<?php echo $sustantivo["declinacion"] ?>";
        var genero = "<?php echo $sustantivo["genero"] ?>";
        var regularidad = "<?php echo $sustantivo["regularidad"] ?>";
        var soluciones = calcularSoluciones(nombre, declinacion, genero, regularidad);

        function calcularSoluciones(nombre, declinacion, genero, regularidad) {
            // Orden: singular - nom., voc., ac., gen., dat., abl.; plural- nom., voc., ac., gen., dat., abl.
            var decl1 = ["a", "a", "am", "ae", "ae", "a", "ae", "ae", "as", "arum", "is", "is"];
            var decl2_us = ["us", "e", "um", "i", "o", "o", "i", "i", "os", "orum", "is", "is"];
            // No contemplo los sustantivos con síncopa como "ager, agri" o "magister, magistri"
            var decl2_er_ir = ["", "", "um", "i", "o", "o", "i", "i", "os", "orum", "is", "is"];
            var decl2N = ["um", "um", "um", "i", "o", "o", "a", "a", "a", "orum", "is", "is"];

            var decl3_i = ["is", "is", "em", "is", "i", "e", "es", "es", "es", "ium", "ibus", "ibus"];
            // Labiales y -m
            var decl3_lab_m = ["s", "s", "em", "is", "i", "e", "es", "es", "es", "um", "ibus", "ibus"];
            // Líquidas
            var decl3_liq = ["", "", "em", "is", "i", "e", "es", "es", "es", "um", "ibus", "ibus"];
            // Dentales
            var decl3_d = ["s", "s", "dem", "dis", "di", "de", "des", "des", "des", "dum", "dibus", "dibus"];
            var decl3_d_sinS = ["", "", "dem", "dis", "di", "de", "des", "des", "des", "dum", "dibus", "dibus"];
            var decl3_t = ["s", "s", "tem", "tis", "ti", "te", "tes", "tes", "tes", "tum", "tibus", "tibus"];
            var decl3_t_sinS = ["", "", "tem", "tis", "ti", "te", "tes", "tes", "tes", "tum", "tibus", "tibus"];
            // Guturales
            var decl3_c = ["x", "x", "cem", "cis", "ci", "ce", "ces", "ces", "ces", "cum", "cibus", "cibus"];
            var decl3_g = ["x", "x", "gem", "gis", "gi", "ge", "ges", "ges", "ges", "gum", "gibus", "gibus"];
            // En -n
            var decl3_n = ["", "", "nem", "nis", "ni", "ne", "nes", "nes", "nes", "num", "nibus", "nibus"];
            // Sibilantes (con rotacismo)
            var decl3_s = ["s", "s", "rem", "ris", "ri", "re", "res", "res", "res", "rum", "ribus", "ribus"];

            var decl4_MF = ["us", "us", "um", "us", "ui", "u", "us", "us", "us", "uum", "ibus", "ibus"];
            var decl4_N = ["u", "u", "u", "us", "ui", "u", "ua", "ua", "ua", "uum", "ibus", "ibus"];

            var decl5 = ["es", "es", "em", "ei", "ei", "e", "es", "es", "es", "erum", "ebus", "ebus"];

            var indiceRaiz, desinenciasElegidas;

            if (declinacion == 1) {
                indiceRaiz = 1;
                desinenciasElegidas = decl1;
            }
            else if (declinacion == 2) {
                if (genero == "n") {
                    indiceRaiz = 2;
                    desinenciasElegidas = decl2N;
                }
                else if (nombre.endsWith("us")) {
                    indiceRaiz = 2;
                    desinenciasElegidas = decl2_us;
                }
                else {
                    indiceRaiz = 0;
                    desinenciasElegidas = decl2_er_ir;
                }
            }
            else if (declinacion == 3) {
                if (regularidad == "") {
                    // TODO: tener en cuenta el genero ?
                    if (nombre.endsWith("is")) {
                        indiceRaiz = 2;
                        desinenciasElegidas = decl3_i;
                    }
                    else if (nombre.endsWith("bs") || nombre.endsWith("ps") || nombre.endsWith("ms")) {
                        indiceRaiz = 1;
                        desinenciasElegidas = decl3_lab_m;
                    }
                    else if (nombre.endsWith("r") || nombre.endsWith("l")) {
                        indiceRaiz = 0;
                        desinenciasElegidas = decl3_liq;
                    }
                }
                else {
                    // TODO: optimizar la llamada usando lo de Carlos ADIC
                    if (regularidad == "d") {
                        if (nombre.endsWith("s")) {
                            indiceRaiz = 1;
                            desinenciasElegidas = decl3_d;
                        }
                        else {
                            indiceRaiz = 0;
                            desinenciasElegidas = decl3_d_sinS;
                        }
                    }
                    else if (regularidad == "t") {
                        if (nombre == "miles") {
                            nombre = "milis";
                        }
                        if (nombre.endsWith("s")) {
                            indiceRaiz = 1;
                            desinenciasElegidas = decl3_t;
                        }
                        else {
                            indiceRaiz = 0;
                            desinenciasElegidas = decl3_t_sinS;
                        }
                    }
                    else if (regularidad == "c") {
                        indiceRaiz = 1;
                        desinenciasElegidas = decl3_c;
                    }
                    else if (regularidad == "g") {
                        indiceRaiz = 1;
                        desinenciasElegidas = decl3_g;
                    }
                    else if (regularidad == "n") {
                        indiceRaiz = 0;
                        desinenciasElegidas = decl3_n;
                    }
                    else if (regularidad == "s") {
                        indiceRaiz = 1;
                        desinenciasElegidas = decl3_s;
                    }
                }
            }
            else if (declinacion == 4) {
                if (genero == "n") {
                    indiceRaiz = 1;
                    desinenciasElegidas = decl4_N;
                }
                else {
                    indiceRaiz = 2;
                    desinenciasElegidas = decl4_MF;
                }
            }
            else if (declinacion == 5) {
                indiceRaiz = 2;
                desinenciasElegidas = decl5;
            }

            var raiz = nombre.substring(0, nombre.length - indiceRaiz);
            if (desinenciasElegidas == undefined) {
                alert("No se ha podido calcular la solución de la palabra " + nombre + ". Consulta a Gonzalo.");
            }
            else {
                return desinenciasElegidas.map(terminacion => raiz + terminacion);
            }
        }

        function mostrarDeclinacion() {
            var generoLegible;
            if (genero == "m") generoLegible = "masculino";
            else if (genero == "f") generoLegible = "femenino";
            else generoLegible = "neutro";
            alert("Este sustantivo es " + generoLegible + " y pertenece a la " + declinacion + ".ª declinación");
        }

    </script>
</body>

</html>
