const typed = new Typed('.typed', {
    strings: [
        'Transporte Seguro',
        'Servicio Privado',
        'Puntualidad',
        'Comodidad'
    ],

    typeSpeed: 150, // Velocidad en milisegundos para poner una letra.
    startDelay: 800, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar.
    backSpeed: 100, // Velocidad en milisegundos en borrar una letra.
    backDelay: 2500, // Tiempo de espera despues de que termina de escribir una palabra.
    loop: true, // Repetir el array de strings.
    contentType: 'html'
});