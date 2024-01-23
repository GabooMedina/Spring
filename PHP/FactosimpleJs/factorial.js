function calcularFactorial(numero) {
    if (numero < 0) {
        return "El factorial no está definido para números negativos.";
    } else if (numero === 0 || numero === 1) {
        return 1;
    } else {
        let resultado = 1;
        for (let i = 2; i <= numero; i++) {
            resultado *= i;
        }
        return resultado;
    }
}
// Aquí puedes agregar lógica para manejar el formulario y llamar a la función calcularFactorial
// Puedes acceder al valor del input usando document.getElementsByName
const form = document.querySelector('form');
form.addEventListener('submit', function (event) {
    event.preventDefault(); // Evita que el formulario se envíe por defecto

    const inputNumero = document.getElementsByName('num')[0];
    const numero = parseInt(inputNumero.value);

    const resultadoFactorial = calcularFactorial(numero);
    console.log(`El factorial de ${numero} es: ${resultadoFactorial}`);
});

const numeroIngresado = 0;
const resultadoFactorial = calcularFactorial(numeroIngresado);

console.log(`El factorial de ${numeroIngresado} es: ${resultadoFactorial}`);
