<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demostrativos</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/demostrativos.css">
    <script src="general.js"></script>
</head>

<body>
    <div>
        <div>
            <h2 id="nombreLatin">
                Pronombres demostrativos
            </h2>
        </div>
        <hr>
        <div>
            <button id="flechaAtras" onclick="cambiarPersona(-1)">←</button>
            <button id="flechaAlante" onclick="cambiarPersona(1)">→</button>
        </div>
        <h3 id="personaActual" class="resaltar">Primera persona</h3>
        <div>
            <table class="declensionTestTable">
                <thead>
                    <tr>
                        <th class="cursiva primera">singular</th>
                        <th>masculino</th>
                        <th>femenino</th>
                        <th>neutro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cursiva">Nom./Voc.</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">Acusativo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">Genitivo</td>
                        <td class="colEntrada" colspan="3"><input type="text" value="" class="triple"><span
                                class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">Dativo</td>
                        <td class="colEntrada" colspan="3"><input type="text" value="" class="triple"><span
                                class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">Ablativo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                </tbody>
            </table>
            <table class="declensionTestTable">
                <thead>
                    <tr>
                        <th class="cursiva primera">plural</th>
                        <th>masculino</th>
                        <th>femenino</th>
                        <th>neutro</th>
                    </tr>
                    <tr>
                        <td class="cursiva">Nom./Voc.</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">Acusativo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">Genitivo</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">Dativo</td>
                        <td class="colEntrada" colspan="3"><input type="text" value="" class="triple"><span
                                class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">Ablativo</td>
                        <td class="colEntrada" colspan="3"><input type="text" value="" class="triple"><span
                                class="correccion"></span></td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <br>
    <input id="btnCorregir" type="button" name="check" value="Corregir" onclick="corregir()">

    <script>
        var personas = ['Primera persona', 'Segunda persona', 'Tercera persona'];
        var persActual = document.getElementById("personaActual");
        var flechaAtras = document.getElementById("flechaAtras");
        var flechaAlante = document.getElementById("flechaAlante");
        flechaAtras.disabled = true;
        var solucionesVariables = [
            [
                "hic", "haec", "hoc",
                "hunc", "hanc", "hoc",
                "huius",
                "huic",
                "hoc", "hac", "hoc",
                "hi", "hae", "haec",
                "hos", "has", "haec",
                "horum", "harum", "horum",
                "his",
                "his"
            ],

            [
                "iste", "ista", "istud",
                "istum", "istam", "istud",
                "istius",
                "isti",
                "isto", "ista", "isto",
                "isti", "istae", "ista",
                "istos", "istas", "ista",
                "istorum", "istarum", "istorum",
                "istis",
                "istis"
            ],

            [
                "ille", "illa", "illud",
                "illum", "illam", "illud",
                "illius",
                "illi",
                "illo", "illa", "illo",
                "illi", "illae", "illa",
                "illos", "illas", "illa",
                "illorum", "illarum", "illorum",
                "illis",
                "illis"
            ]
        ];
        var soluciones = solucionesVariables[0];

        // Agregamos tema a los inputs
        const inputs = document.querySelectorAll('input');
        inputs.forEach(function (input) {
            insertarTema(input);
        });


        function cambiarPersona(variacion) {
            limpiarCampos();
            var indActual = personas.indexOf(persActual.innerText);
            var indNuevo = indActual + variacion;

            // Escondo las flechas oportunas
            if (variacion == 1) {
                flechaAlante.disabled = (indNuevo == 2) ? true : false;
                flechaAtras.disabled = false;
            }
            else {
                flechaAtras.disabled = (indNuevo == 0) ? true : false;
                flechaAlante.disabled = false;
            }

            // Cambio el texto y modifico las soluciones
            persActual.innerText = personas[indActual + variacion];
            soluciones = solucionesVariables[indNuevo];
        }

    </script>
</body>

</html>