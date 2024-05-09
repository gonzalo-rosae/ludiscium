<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pronombres</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/pronombres.css">
    <script src="general.js"></script>
</head>

<body>
    <li>
        <div>
            <h2 id="nombreLatin">
                Pronombres personales
            </h2>
        </div>
        <hr>
        <div>
            <button id="flechaAtras" onclick="cambiarPersona(-1)">←</button>
            <button id="flechaAlante" onclick="cambiarPersona(1)">→</button>
        </div>
        <h3 id="personaActual" class="resaltar">Primera persona</h3>
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
                        <td class="cursiva">genitivo (normal)</td>
                        <td class="colEntrada"><input type="text" value=""><span class="correccion"></span></td>
                    </tr>
                    <tr>
                        <td class="cursiva">genitivo (partitivo)</td>
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
        <input id="btnCorregir" type="button" name="check" value="Corregir" onclick="corregirEnRango(0,12)">
    </li>

    <script>
        var personas = ['Primera persona', 'Segunda persona'];
        var persActual = document.getElementById("personaActual");
        var flechaAtras = document.getElementById("flechaAtras");
        var flechaAlante = document.getElementById("flechaAlante");
        flechaAtras.disabled = true;
        var solucionesVariables = [
            [
                "ego", "ego", "me", "mei", "mihi", "me",
                "nos", "nos", "nos", "nostri", "nostrum", "nobis", "nobis"
            ],
            [
                "tu", "tu", "te", "tui", "tibi", "te",
                "vos", "vos", "vos", "vestri", "vestrum", "vobis", "vobis"
            ]
        ];
        var soluciones = solucionesVariables[0];

        function cambiarPersona(variacion) {
            limpiarCampos();
            var indActual = personas.indexOf(persActual.innerText);
            var indNuevo = indActual + variacion;

            // Escondo las flechas oportunas
            if (variacion == 1) {
                flechaAlante.disabled = (indNuevo == 1) ? true : false;
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