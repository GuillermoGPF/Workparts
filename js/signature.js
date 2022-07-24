// Signature Document

// Signature1--------------------------------------------------------------
// VARIABLES
let miCanvas1 = document.getElementById('signature1');
let lineas1 = [];
let correccionX1 = 0;
let correccionY1 = 0;
let pintarLinea1 = false;
// Marca el nuevo punto
let nuevaPosicionX1 = 0;
let nuevaPosicionY1 = 0;

let posicion1 = miCanvas1.getBoundingClientRect()
correccionX1 = posicion1.x;
correccionY1 = posicion1.y;

miCanvas1.width = 800;
miCanvas1.height = 200;

// FUNCIONES
function empezarDibujo1() {
    pintarLinea1 = true;
    lineas1.push([]);
};

function guardarLinea1() {
    lineas1[lineas1.length - 1].push({
        x: nuevaPosicionX1,
        y: nuevaPosicionY1
    });
}

function dibujarLinea1(event) {
    event.preventDefault();
    if (pintarLinea1) {
        let ctx = miCanvas1.getContext('2d')
        // Estilos de linea
        ctx.lineJoin = ctx.lineCap = 'round';
        ctx.lineWidth = 6;
        // Color de la linea
        ctx.strokeStyle = '#3a5f94';
        // Marca el nuevo punto
        if (event.changedTouches == undefined) {
            // Versión ratón
            nuevaPosicionX1 = event.layerX;
            nuevaPosicionY1 = event.layerY;
        } else {
            // Versión touch, pantalla tactil
            nuevaPosicionX1 = event.changedTouches[0].pageX - correccionX1;
            nuevaPosicionY1 = event.changedTouches[0].pageY - correccionY1;
        }
        // Guarda la linea
        guardarLinea1();
        // Redibuja todas las lineas guardadas
        ctx.beginPath();
        lineas1.forEach(function (segmento) {
            ctx.moveTo(segmento[0].x, segmento[0].y);
            segmento.forEach(function (punto, index) {
                ctx.lineTo(punto.x, punto.y);
            });
        });
        ctx.stroke();
    }
}

function pararDibujar1() {
    pintarLinea1 = false;
    guardarLinea1();
}

// EVENTOS
// Eventos raton
miCanvas1.addEventListener('mousedown', empezarDibujo1, false);
miCanvas1.addEventListener('mousemove', dibujarLinea1, false);
miCanvas1.addEventListener('mouseup', pararDibujar1, false);
// Eventos pantallas táctiles
miCanvas1.addEventListener('touchstart', empezarDibujo1, false);
miCanvas1.addEventListener('touchmove', dibujarLinea1, false);

// Signature2--------------------------------------------------------------
// VARIABLES
let miCanvas2 = document.getElementById('signature2');
let lineas2 = [];
let correccionX2 = 0;
let correccionY2 = 0;
let pintarLinea2 = false;
// Marca el nuevo punto
let nuevaPosicionX2 = 0;
let nuevaPosicionY2 = 0;

let posicion2 = miCanvas2.getBoundingClientRect()
correccionX2 = posicion2.x;
correccionY2 = posicion2.y;

miCanvas2.width = 800;
miCanvas2.height = 200;

// FUNCIONES
function empezarDibujo2() {
    pintarLinea2 = true;
    lineas2.push([]);
};

function guardarLinea2() {
    lineas2[lineas2.length - 1].push({
        x: nuevaPosicionX2,
        y: nuevaPosicionY2
    });
}

function dibujarLinea2(event) {
    event.preventDefault();
    if (pintarLinea2) {
        let ctx = miCanvas2.getContext('2d')
        // Estilos de linea
        ctx.lineJoin = ctx.lineCap = 'round';
        ctx.lineWidth = 6;
        // Color de la linea
        ctx.strokeStyle = '#3a5f94';
        // Marca el nuevo punto
        if (event.changedTouches == undefined) {
            // Versión ratón
            nuevaPosicionX2 = event.layerX;
            nuevaPosicionY2 = event.layerY;
        } else {
            // Versión touch, pantalla tactil
            nuevaPosicionX2 = event.changedTouches[0].pageX - correccionX2;
            nuevaPosicionY2 = event.changedTouches[0].pageY - correccionY2;
        }
        // Guarda la linea
        guardarLinea2();
        // Redibuja todas las lineas guardadas
        ctx.beginPath();
        lineas2.forEach(function (segmento) {
            ctx.moveTo(segmento[0].x, segmento[0].y);
            segmento.forEach(function (punto, index) {
                ctx.lineTo(punto.x, punto.y);
            });
        });
        ctx.stroke();
    }
}

function pararDibujar2() {
    pintarLinea2 = false;
    guardarLinea2();
}

// EVENTOS
// Eventos raton
miCanvas2.addEventListener('mousedown', empezarDibujo2, false);
miCanvas2.addEventListener('mousemove', dibujarLinea2, false);
miCanvas2.addEventListener('mouseup', pararDibujar2, false);
// Eventos pantallas táctiles
miCanvas2.addEventListener('touchstart', empezarDibujo2, false);
miCanvas2.addEventListener('touchmove', dibujarLinea2, false);