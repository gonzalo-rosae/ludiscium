<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gramática</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/gramatica.css">
    <script src="general.js"></script>
</head>

<body>
    <h1>Gramática</h1>

    <div id="listado">
        <div class="section-wrapper">
            <button class="toggle-btn" onclick="toggleSection('dativo', this)"> <!-- Botón con carácter "+" -->
                <span id="icon-dativo">+</span>
            </button>
            <h2>Dativo de posesión</h2>
            <div id="dativo" class="seccion oculto">
                <p>
                    El dativo puede usarse con valor posesivo, marcando al poseedor de algo.
                    <br>
                    Para esto se usa la siguiente fórmula:
                </p>
                <table class="sangria">
                    <td>poseído.NOM, poseedor.DAT, sum</td>
                </table>
                <p>Ejemplos:</p>
                <ul>
                    <li class="sangria">
                        <p class="italica">Puer librum habet → Liber puero est</p>
                        <p>[El niño tiene un libro]</p>
                    </li>
                    <li class="sangria">
                        <p class="italica">Meum nomen Gundisalvus est → Mihi nomen Gundisalvus est</p>
                        <p>[Mi nombre es Gonzalo]</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="section-wrapper">
            <button class="toggle-btn" onclick="toggleSection('adjetivos', this)"> <!-- Botón con carácter "+" -->
                <span id="icon-adjetivos">+</span>
            </button>
            <h2>Tipos de adjetivo</h2>
            <div id="adjetivos" class="seccion oculto">
                <div class="margen">
                    <p>Nota: cuando se habla de que un adjetivo "tiene N terminaciones", se refiere al número de
                        terminaciones en nominativo singular.</p>
                    <h3>Adjetivos de 1.ª clase</h3>
                    <p>
                        Tienen 3 terminaciones, una por cada género, y coinciden con las desinencias de los sustantivos:
                        <br>
                        Masculino en -us/-er (2.ª declinación), femenino en -a (1.ª declinación), neutro en -um (2.ª
                        declinación).
                    </p>
                    <table class="inline">
                        <thead>
                            <tr>
                                <th class=" primera">singular</th>
                                <th>masculino</th>
                                <th>femenino</th>
                                <th>neutro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="">Nominativo</th>
                                <td class="colEntrada">bonus</td>
                                <td class="colEntrada">bona</td>
                                <td class="colEntrada">bonum</td>
                            </tr>
                            <tr>
                                <th class="">Vocativo</th>
                                <td class="colEntrada">bone</td>
                                <td class="colEntrada">bona</td>
                                <td class="colEntrada">bonum</td>
                            </tr>
                            <tr>
                                <th class="">Acusativo</th>
                                <td class="colEntrada">bonum</td>
                                <td class="colEntrada">bonam</td>
                                <td class="colEntrada">bonum</td>
                            </tr>
                            <tr>
                                <th class="">Genitivo</th>
                                <td class="colEntrada">boni</td>
                                <td class="colEntrada">bonae</td>
                                <td class="colEntrada">boni</td>
                            </tr>
                            <tr>
                                <th class="">Dativo</th>
                                <td class="colEntrada">bono</td>
                                <td class="colEntrada">bonae</td>
                                <td class="colEntrada">bono</td>
                            </tr>
                            <tr>
                                <th class="">Ablativo</th>
                                <td class="colEntrada">bono</td>
                                <td class="colEntrada">bona</td>
                                <td class="colEntrada">bono</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="inline">
                        <thead>
                            <tr>
                                <th class=" primera">plural</th>
                                <th>masculino</th>
                                <th>femenino</th>
                                <th>neutro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="">Nominativo</th>
                                <td class="colEntrada">boni</td>
                                <td class="colEntrada">bonae</td>
                                <td class="colEntrada">bona</td>
                            </tr>
                            <tr>
                                <th class="">Vocativo</th>
                                <td class="colEntrada">boni</td>
                                <td class="colEntrada">bonae</td>
                                <td class="colEntrada">bona</td>
                            </tr>
                            <tr>
                                <th class="">Acusativo</th>
                                <td class="colEntrada">bonos</td>
                                <td class="colEntrada">bonas</td>
                                <td class="colEntrada">bona</td>
                            </tr>
                            <tr>
                                <th class="">Genitivo</th>
                                <td class="colEntrada">bonorum</td>
                                <td class="colEntrada">bonarum</td>
                                <td class="colEntrada">bonorum</td>
                            </tr>
                            <tr>
                                <th class="">Dativo</th>
                                <td class="colEntrada">bonis</td>
                                <td class="colEntrada">bonis</td>
                                <td class="colEntrada">bonis</td>
                            </tr>
                            <tr>
                                <th class="">Ablativo</th>
                                <td class="colEntrada">bonis</td>
                                <td class="colEntrada">bonis</td>
                                <td class="colEntrada">bonis</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="margen">
                    <h3>Adjetivos de 2.ª clase</h3>
                    <p>
                        Pueden tener una, dos o tres terminaciones. Sus desinencias son las de la 3.ª declinación
                        (ablativo
                        singular en -is).
                        <br>
                        Casi todos son temas en -i.
                    </p>

                    <p>1 terminación:</p>
                    <table class="inline">
                        <thead>
                            <tr>
                                <th class=" primera">singular</th>
                                <th>masc./fem.</th>
                                <th>neutro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="">Nominativo</th>
                                <td class="colEntrada">ingens</td>
                                <td class="colEntrada">ingens</td>
                            </tr>
                            <tr>
                                <th class="">Vocativo</th>
                                <td class="colEntrada">ingens</td>
                                <td class="colEntrada">ingens</td>
                            </tr>
                            <tr>
                                <th class="">Acusativo</th>
                                <td class="colEntrada">ingentem</td>
                                <td class="colEntrada">ingens</td>
                            </tr>
                            <tr>
                                <th class="">Genitivo</th>
                                <td class="colEntrada">ingentis</td>
                                <td class="colEntrada">ingentis</td>
                            </tr>
                            <tr>
                                <th class="">Dativo</th>
                                <td class="colEntrada">ingenti</td>
                                <td class="colEntrada">ingenti</td>
                            </tr>
                            <tr>
                                <th class="">Ablativo</th>
                                <td class="colEntrada">ingenti</td>
                                <td class="colEntrada">ingenti</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="inline">
                        <thead>
                            <tr>
                                <th class=" primera">plural</th>
                                <th>masc./fem.</th>
                                <th>neutro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="">Nominativo</th>
                                <td class="colEntrada">ingentes</td>
                                <td class="colEntrada">ingentia</td>
                            </tr>
                            <tr>
                                <th class="">Vocativo</th>
                                <td class="colEntrada">ingentes</td>
                                <td class="colEntrada">ingentia</td>
                            </tr>
                            <tr>
                                <th class="">Acusativo</th>
                                <td class="colEntrada">ingentes</td>
                                <td class="colEntrada">ingentia</td>
                            </tr>
                            <tr>
                                <th class="">Genitivo</th>
                                <td class="colEntrada">ingentium</td>
                                <td class="colEntrada">ingentium</td>
                            </tr>
                            <tr>
                                <th class="">Dativo</th>
                                <td class="colEntrada">ingentibus</td>
                                <td class="colEntrada">ingentibus</td>
                            </tr>
                            <tr>
                                <th class="">Ablativo</th>
                                <td class="colEntrada">ingentibus</td>
                                <td class="colEntrada">ingentibus</td>
                            </tr>
                        </tbody>
                    </table>

                    <br>

                    <p>2 terminaciones:</p>
                    <table class="inline">
                        <thead>
                            <tr>
                                <th class=" primera">singular</th>
                                <th>masc./fem.</th>
                                <th>neutro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="">Nominativo</th>
                                <td class="colEntrada">omnis</td>
                                <td class="colEntrada">omne</td>
                            </tr>
                            <tr>
                                <th class="">Vocativo</th>
                                <td class="colEntrada">omnis</td>
                                <td class="colEntrada">omne</td>
                            </tr>
                            <tr>
                                <th class="">Acusativo</th>
                                <td class="colEntrada">omnem</td>
                                <td class="colEntrada">omne</td>
                            </tr>
                            <tr>
                                <th class="">Genitivo</th>
                                <td class="colEntrada">omnis</td>
                                <td class="colEntrada">omnis</td>
                            </tr>
                            <tr>
                                <th class="">Dativo</th>
                                <td class="colEntrada">omni</td>
                                <td class="colEntrada">omni</td>
                            </tr>
                            <tr>
                                <th class="">Ablativo</th>
                                <td class="colEntrada">omni</td>
                                <td class="colEntrada">omni</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="inline">
                        <thead>
                            <tr>
                                <th class=" primera">plural</th>
                                <th>masc./fem.</th>
                                <th>neutro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="">Nominativo</th>
                                <td class="colEntrada">omnes</td>
                                <td class="colEntrada">omnia</td>
                            </tr>
                            <tr>
                                <th class="">Vocativo</th>
                                <td class="colEntrada">omnes</td>
                                <td class="colEntrada">omnia</td>
                            </tr>
                            <tr>
                                <th class="">Acusativo</th>
                                <td class="colEntrada">omnes</td>
                                <td class="colEntrada">omnia</td>
                            </tr>
                            <tr>
                                <th class="">Genitivo</th>
                                <td class="colEntrada">omnium</td>
                                <td class="colEntrada">omnium</td>
                            </tr>
                            <tr>
                                <th class="">Dativo</th>
                                <td class="colEntrada">omnibus</td>
                                <td class="colEntrada">omnibus</td>
                            </tr>
                            <tr>
                                <th class="">Ablativo</th>
                                <td class="colEntrada">omnibus</td>
                                <td class="colEntrada">omnibus</td>
                            </tr>
                        </tbody>
                    </table>

                    <br>

                    <p>3 terminaciones:</p>
                    <table class="inline">
                        <thead>
                            <tr>
                                <th class=" primera">singular</th>
                                <th>masculino</th>
                                <th>femenino</th>
                                <th>neutro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="">Nominativo</th>
                                <td class="colEntrada">acer</td>
                                <td class="colEntrada">acris</td>
                                <td class="colEntrada">acre</td>
                            </tr>
                            <tr>
                                <th class="">Vocativo</th>
                                <td class="colEntrada">acer</td>
                                <td class="colEntrada">acris</td>
                                <td class="colEntrada">acre</td>
                            </tr>
                            <tr>
                                <th class="">Acusativo</th>
                                <td class="colEntrada">acrem</td>
                                <td class="colEntrada">acrem</td>
                                <td class="colEntrada">acre</td>
                            </tr>
                            <tr>
                                <th class="">Genitivo</th>
                                <td class="colEntrada">acris</td>
                                <td class="colEntrada">acris</td>
                                <td class="colEntrada">acris</td>
                            </tr>
                            <tr>
                                <th class="">Dativo</th>
                                <td class="colEntrada">acri</td>
                                <td class="colEntrada">acri</td>
                                <td class="colEntrada">acri</td>
                            </tr>
                            <tr>
                                <th class="">Ablativo</th>
                                <td class="colEntrada">acri</td>
                                <td class="colEntrada">acri</td>
                                <td class="colEntrada">acri</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="inline">
                        <thead>
                            <tr>
                                <th class=" primera">plural</th>
                                <th>masculino</th>
                                <th>femenino</th>
                                <th>neutro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="">Nominativo</th>
                                <td class="colEntrada">acres</td>
                                <td class="colEntrada">acres</td>
                                <td class="colEntrada">acria</td>
                            </tr>
                            <tr>
                                <th class="">Vocativo</th>
                                <td class="colEntrada">acres</td>
                                <td class="colEntrada">acres</td>
                                <td class="colEntrada">acria</td>
                            </tr>
                            <tr>
                                <th class="">Acusativo</th>
                                <td class="colEntrada">acres</td>
                                <td class="colEntrada">acres</td>
                                <td class="colEntrada">acria</td>
                            </tr>
                            <tr>
                                <th class="">Genitivo</th>
                                <td class="colEntrada">acrium</td>
                                <td class="colEntrada">acrium</td>
                                <td class="colEntrada">acrium</td>
                            </tr>
                            <tr>
                                <th class="">Dativo</th>
                                <td class="colEntrada">acribus</td>
                                <td class="colEntrada">acribus</td>
                                <td class="colEntrada">acribus</td>
                            </tr>
                            <tr>
                                <th class="">Ablativo</th>
                                <td class="colEntrada">acribus</td>
                                <td class="colEntrada">acribus</td>
                                <td class="colEntrada">acribus</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="section-wrapper">
            <button class="toggle-btn" onclick="toggleSection('comparativo', this)"> <!-- Botón con carácter "+" -->
                <span id="icon-comparativo">+</span>
            </button>
            <h2>Comparativo</h2>
            <div id="comparativo" class="seccion oculto">
                <ul>
                    <li>Inferioridad: minus ... quam ...</li>
                    <p class="ejemplo">Petrus minus altus est quam Antonius.</p>
                    <li>Igualdad: tam ... quam ...</li>
                    <p class="ejemplo">Petrus tam altus est quam Antonius.</p>
                    <li>Superioridad: plus/magis ... quam ...</li>
                    <p class="ejemplo">Petrus plus altus est quam Antonius.</p>

                    <table>
                        <td>
                            <p>► Normalmente, en el comparativo de superioridad se sustituye "plus/magis x" por "x-ior"
                            </p>
                            <p class="ejemplo">Petrus altior est quam Antonius.</p>
                            <p>► En este caso, también podemos eliminar el "quam" a cambio de poner el segundo término
                                de la
                                comparación
                                en
                                ablativo</p>
                            <p class="ejemplo">Petrus altior est Antonio.</p>
                            <p>► El adjetivo en -ior se forma así:</p>
                            <table></table>
                        </td>
                    </table>
                </ul>
            </div>
        </div>

        <div class="section-wrapper">
            <button class="toggle-btn" onclick="toggleSection('ccl', this)"> <!-- Botón con carácter "+" -->
                <span id="icon-ccl">+</span>
            </button>
            <h2>Complemento Circunstancial de Lugar</h2>
            <div id="ccl" class="seccion oculto">
                <img class="margen" src="assets/circunstanciales_lugar.png"
                    alt="Imagen explicativa de los complementos circunstanciales de lugar">
            </div>
        </div>

        <div class="section-wrapper">
            <button class="toggle-btn" onclick="toggleSection('pasiva', this)"> <!-- Botón con carácter "+" -->
                <span id="icon-pasiva">+</span>
            </button>
            <h2>Pasiva</h2>
            <div id="pasiva" class="seccion oculto">
                <p>Para verbos transitivos:</p>
                <p>
                    El sujeto de la activa (nominativo) pasa a sujeto agente (ablativo). El CD de la activa (acusativo)
                    pasa a sujeto paciente (nominativo).
                    <br>
                    Además, si el agente es una persona, irá antecedido de a(b). Al verbo se le añade la desinencia de
                    pasiva correspondiente.
                </p>
                <p class="ejemplo">Puella reginam amat → a puella regina amatur</p>
                <table>
                    <th>Persona</th>
                    <th>Singular</th>
                    <th>Plural</th>
                    <tr>
                        <td>1.ª</td>
                        <td>-(o)r</td>
                        <td>-mur</td>
                    </tr>
                    <tr>
                        <td>2.ª</td>
                        <td>-ris, -re</td>
                        <td>-mini</td>
                    </tr>
                    <tr>
                        <td>3.ª</td>
                        <td>-tur</td>
                        <td>-ntur</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="section-wrapper">
            <button class="toggle-btn" onclick="toggleSection('coordinadas', this)"> <!-- Botón con carácter "+" -->
                <span id="icon-coordinadas">+</span>
            </button>
            <h2>Coordinadas</h2>
            <div id="coordinadas" class="seccion oculto">
                <table class="margen centrar">
                    <tr>
                        <th>TIPOS</th>
                        <th>CONJUNCIONES</th>
                        <th>EJEMPLOS</th>
                    </tr>
                    <tr>
                        <td rowspan="2">Copulativas</td>
                        <td rowspan="2">et, -que, atque/ac</td>
                        <td>Parentes liberique agrum laborant</td>
                    </tr>
                    <tr>
                        <td>[Los padres y los hijos trabajan el campo]</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Disyuntivas</td>
                        <td rowspan="2">aut, vel, -ve, sive/seu</td>
                        <td>Cita mors venit aut laeta victoria</td>
                    </tr>
                    <tr>
                        <td>[Se avecina una muerte rápida o una alegre victoria]</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Adversativas</td>
                        <td rowspan="2">sed, at, autem</td>
                        <td>Video te venientem, sed non video meam pecuniam</td>
                    </tr>
                    <tr>
                        <td>[Veo que vienes, pero no veo mi dinero]</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Causales/explicativas</td>
                        <td rowspan="2">nam, namque, enim</td>
                        <td>Ne te excuses, nam facile venisse poteras</td>
                    </tr>
                    <tr>
                        <td>[No te excuses, pues podías haber venido fácilmente]</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Ilativas</td>
                        <td rowspan="2">ergo, igitur, itaque</td>
                        <td>Iam pluere desinit, ergo exeamus</td>
                    </tr>
                    <tr>
                        <td>[Ya deja de llover, así que salgamos]</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="section-wrapper">
            <button class="toggle-btn" onclick="toggleSection('subordinadas', this)"> <!-- Botón con carácter "+" -->
                <span id="icon-subordinadas">+</span>
            </button>
            <h2>Subordinadas</h2>
            <div id="subordinadas" class="seccion oculto">
                <table class="margen centrar">
                    <tr>
                        <th>TIPO</th>
                        <th>CONJUNCIÓN</th>
                        <th>EJEMPLOS</th>
                    </tr>
                    <tr>
                        <td rowspan="2">Causal</td>
                        <td rowspan="2">quia</td>
                        <td>Omnes ei abeunt, quia periculum vitant</td>
                    </tr>
                    <tr>
                        <td>[Todos ellos se marchan, porque evitan el peligro]</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Temporal</td>
                        <td rowspan="2">cum</td>
                        <td>Cum Caesar in Galliam venit, in ea duae factiones erant</td>
                    </tr>
                    <tr>
                        <td>[Cuando César llegó a la Galia, había dos bandos en ella]</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Temporal</td>
                        <td rowspan="2">dum</td>
                        <td>Dum Caesar in Gallia fuit, nullum periculum eos minavit</td>
                    </tr>
                    <tr>
                        <td>[Mientras César estuvo en la Galia, ningún peligro los amenazó]</td>
                    </tr>
                    <tr>
                        <td rowspan="2">Modal</td>
                        <td rowspan="2">ut</td>
                        <td>Ut ego dixeram, Caesar cum exercitu venit</td>
                    </tr>
                    <tr>
                        <td>[Como yo había dicho, César vino con el ejército]</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="section-wrapper">
            <button class="toggle-btn" onclick="toggleSection('numerales', this)"> <!-- Botón con carácter "+" -->
                <span id="icon-numerales">+</span>
            </button>
            <h2>Numerales</h2>
            <div id="numerales" class="seccion oculto">
                <h3>Lista primeros numerales</h3>
                <table class="margen">
                    <tr>
                        <td>I</td>
                        <td>Unus, -a, -um</td>
                        <td>XI</td>
                        <td>Undecim</td>
                        <td>XXI</td>
                        <td>Unus et viginti</td>
                        <td>XL</td>
                        <td>Quadraginta</td>
                        <td>CC</td>
                        <td>Ducenti, -ae, -a</td>
                    </tr>
                    <tr>
                        <td>II</td>
                        <td>Duo, -ae, -o</td>
                        <td>XII</td>
                        <td>Duodecim</td>
                        <td>XXII</td>
                        <td>Viginti duo</td>
                        <td>L</td>
                        <td>Quinquaginta</td>
                        <td>CCC</td>
                        <td>Trecenti, -ae, -a</td>
                    </tr>
                    <tr>
                        <td>III</td>
                        <td>Tres, tria</td>
                        <td>XIII</td>
                        <td>Tredecim</td>
                        <td>XXIII</td>
                        <td>Viginti tres</td>
                        <td>LX</td>
                        <td>Sexaginta</td>
                        <td>CCCC</td>
                        <td>Quadrigenti, -ae, -a</td>
                    </tr>
                    <tr>
                        <td>IV</td>
                        <td>Quattuor</td>
                        <td>XIV</td>
                        <td>Quottuordecim</td>
                        <td>...</td>
                        <td>...</td>
                        <td>LXX</td>
                        <td>Septuaginta</td>
                        <td>D</td>
                        <td>Quingenti</td>
                    </tr>
                    <tr>
                        <td>V</td>
                        <td>Quinque</td>
                        <td>XV</td>
                        <td>Quindecim</td>
                        <td>...</td>
                        <td>...</td>
                        <td>LXXX</td>
                        <td>Octoginta</td>
                        <td>DC</td>
                        <td>Sescenti</td>
                    </tr>
                    <tr>
                        <td>VI</td>
                        <td>Sex</td>
                        <td>XVI</td>
                        <td>Sedecim</td>
                        <td>...</td>
                        <td>...</td>
                        <td>XC</td>
                        <td>Nonaginta</td>
                        <td>DCC</td>
                        <td>Septingenti</td>
                    </tr>
                    <tr>
                        <td>VII</td>
                        <td>Septem</td>
                        <td>XVII</td>
                        <td>Septendecim</td>
                        <td>...</td>
                        <td>...</td>
                        <td>C</td>
                        <td>Centum</td>
                        <td>DCCC</td>
                        <td>Octingenti</td>
                    </tr>
                    <tr>
                        <td>VIII</td>
                        <td>Octo</td>
                        <td>XVIII</td>
                        <td>Duodeviginti</td>
                        <td>XXVIII</td>
                        <td>Duodetriginta</td>
                        <td>CI</td>
                        <td>Centum unus</td>
                        <td>DCCCC</td>
                        <td>Nongenti</td>
                    </tr>
                    <tr>
                        <td>IX</td>
                        <td>Novem</td>
                        <td>XIX</td>
                        <td>Undeviginti</td>
                        <td>XXIX</td>
                        <td>Undetriginta</td>
                        <td>CXX</td>
                        <td>Centum et viginti</td>
                        <td>M</td>
                        <td>Mille</td>
                    </tr>
                    <tr>
                        <td>X</td>
                        <td>Decem</td>
                        <td>XX</td>
                        <td>Viginti</td>
                        <td>XXX</td>
                        <td>Triginta</td>
                        <td>CXXI</td>
                        <td>Centum unus et viginti</td>
                        <td>MM</td>
                        <td>Duo milia</td>
                    </tr>
                </table>
                <h3>Declinaciones de los números uno, dos y tres</h3>
                <table class="centrar inline">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Masculino</th>
                            <th>Femenino</th>
                            <th>Neutro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nominativo</td>
                            <td>unus</td>
                            <td>una</td>
                            <td>unum</td>
                        </tr>
                        <tr>
                            <td>Acusativo</td>
                            <td>unum</td>
                            <td>unam</td>
                            <td>unum</td>
                        </tr>
                        <tr>
                            <td>Genitivo</td>
                            <td colspan="3">unius</td>
                        </tr>
                        <tr>
                            <td>Dativo</td>
                            <td colspan="3">uni</td>
                        </tr>
                        <tr>
                            <td>Ablativo</td>
                            <td>uno</td>
                            <td>una</td>
                            <td>uno</td>
                        </tr>
                    </tbody>
                </table>
                <table class="centrar inline">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Masculino</th>
                            <th>Femenino</th>
                            <th>Neutro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nominativo</td>
                            <td>duo</td>
                            <td>duae</td>
                            <td>duo</td>
                        </tr>
                        <tr>
                            <td>Acusativo</td>
                            <td>duos</td>
                            <td>duas</td>
                            <td>duo</td>
                        </tr>
                        <tr>
                            <td>Genitivo</td>
                            <td>duorum</td>
                            <td>duarum</td>
                            <td>duorum</td>
                        </tr>
                        <tr>
                            <td>Dativo</td>
                            <td rowspan="2">duobus</td>
                            <td rowspan="2">duabus</td>
                            <td rowspan="2">duobus</td>
                        </tr>
                        <tr>
                            <td>Ablativo</td>
                        </tr>
                    </tbody>
                </table>
                <table class="centrar inline">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Masculino</th>
                            <th>Femenino</th>
                            <th>Neutro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nominativo</td>
                            <td rowspan="2" colspan="2">tres</td>
                            <td rowspan="2">tria</td>
                        </tr>
                        <tr>
                            <td>Acusativo</td>
                        </tr>
                        <tr>
                            <td>Genitivo</td>
                            <td colspan="3">trium</td>
                        </tr>
                        <tr>
                            <td>Dativo</td>
                            <td rowspan="2" colspan="3">tribus</td>
                        </tr>
                        <tr>
                            <td>Ablativo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function toggleSection(id, button) {
            var section = document.getElementById(id);
            section.classList.toggle('oculto');
            var icon = document.getElementById('icon-' + id);
            button.style.backgroundColor = 'green';
            button.style.color = 'white';
            if (icon.textContent === '+') {
                icon.textContent = '-';
            } else {
                icon.textContent = '+';
            }
        }
    </script>
</body>

</html>
