<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relativos</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/relativos.css">
    <script src="general.js"></script>
</head>

<body>
    <div>
        <div>
            <h2 id="nombreLatin">
                Pronombres relativos
            </h2>
        </div>
        <hr>
        <br>
        <br>
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
        <br>
        <input id="btnCorregir" type="button" name="check" value="Corregir" onclick="corregir()">
    </div>


    <script>

        var soluciones = [
            "qui", "quae", "quod",
            "quem", "quam", "quod",
            "cuius",
            "cui",
            "quo", "qua", "quo",
            "qui", "quae", "quae",
            "quos", "quas", "quae",
            "quorum", "quarum", "quorum",
            "quibus",
            "quibus"
        ];

        // Agregamos tema a los inputs
        const inputs = document.querySelectorAll('input');
        inputs.forEach(function (input) {
            insertarTema(input);
        });

    </script>
</body>

</html>