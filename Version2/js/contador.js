
document.addEventListener("DOMContentLoaded", function() {
    const datos = {
        hueso: 200,
        tropicales: 100,
        pomacea: 264,
        citrico: 201
    };

    const duracion = 2000; // Duración de la animación en milisegundos
    const intervalo = 50; // Intervalo de actualización en milisegundos

    function animarContador(elemento, valorFinal) {
        let valorInicial = 0;
        const incremento = Math.ceil(valorFinal / (duracion / intervalo));

        const contador = setInterval(() => {
            valorInicial += incremento;
            if (valorInicial >= valorFinal) {
                clearInterval(contador);
                valorInicial = valorFinal;
            }
            elemento.textContent = valorInicial;
        }, intervalo);
    }

    animarContador(document.getElementById("tropicales"), datos.tropicales);
    animarContador(document.getElementById("pomacea"), datos.pomacea);
    animarContador(document.getElementById("hueso"), datos.hueso);
    animarContador(document.getElementById("citrico"), datos.citrico);
});