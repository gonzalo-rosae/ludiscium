// Ejecución

document.addEventListener('DOMContentLoaded', function() {
    const temaGuardado = localStorage.getItem('tema');
    const body = document.body;
    if (temaGuardado === 'oscuro') {
        body.classList.add('tema-oscuro');
    } else {
        body.classList.add('tema-claro');
    }
});


// Funciones auxiliares

var colorPrevio;

function getTemaActual() {
    return localStorage.getItem('tema');
}

function cambiarTema() {
    var temaActual = getTemaActual();
    var elementos = document.querySelectorAll('.tema-claro, .tema-oscuro');

    for (var i = 0; i < elementos.length; i++) {
        if (temaActual == "claro") {
            elementos[i].classList.add('tema-oscuro');
            elementos[i].classList.remove('tema-claro');
        } else {
            elementos[i].classList.add('tema-claro');
            elementos[i].classList.remove('tema-oscuro');
        }
    }
    
    temaActual = (temaActual == 'claro') ? 'oscuro' : 'claro';
    localStorage.setItem('tema', temaActual);
}


function insertarTema(nodo) {
    var clase = "tema-" + getTemaActual();
    nodo.classList.add(clase);
}

function recargar() {
    location.reload();
}

function corregir() {
    corregirEnRango(0, -1);
}

function corregirEnRango(desde, hasta) {
    var entradas = document.querySelectorAll('input[type="text"]');
    var correcciones = document.querySelectorAll('.correccion');
    var boton = document.getElementById("btnCorregir");
    colorPrevio = entradas[0].style.backgroundColor;
    var clase;

    if (hasta == -1) hasta = entradas.length - 1;

    if (boton.value == "Corregir") {
        for (var i = desde; i <= hasta; i++) {
            if (esCorrecto(entradas[i].value.toLowerCase(), soluciones[i])) {
                clase = 'correcto';
            }
            else {
                clase = 'incorrecto';
                correcciones[i].textContent = "(" + soluciones[i] + ")";
            }
            entradas[i].classList.add(clase);
        }
        boton.value = "Limpiar";
    }
    else if (boton.value == "Limpiar") {
        for (var i = desde; i <= hasta; i++) {
            entradas[i].value = "";
            entradas[i].classList.remove("correcto", "incorrecto");
            correcciones[i].textContent = "";
        }
        boton.value = "Corregir";
    }
}


function esCorrecto(candidato, solucion) {
    if (!solucion.includes("/")) {
        if (candidato == "pueblo") console.log("no la incluye!!");
        return candidato == solucion;
    }
    else {
        if (candidato == "pueblo") console.log("la incluye!!");
        var posibilidades = solucion.split("/");
        for (const sol of posibilidades) {
            if (candidato == sol) return true;
        }
        return false;
    }
}


function limpiarCampos() {
    var entradas = document.querySelectorAll('input[type="text"]');
    var correcciones = document.querySelectorAll('.correccion');

    // Limpiamos los campos
    for (var i = 0; i < entradas.length; i++) {
        entradas[i].style.backgroundColor = colorPrevio;
        entradas[i].value = "";
        correcciones[i].textContent = "";
    }

    // Reseteamos el botón
    var boton = document.getElementById("btnCorregir");
    boton.value = "Corregir";
    boton.hidden = false;
}