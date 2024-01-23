function factorial(numero) {

    if (numero < 0) {
        return "ERROR NO EXISTEN FACTORIALES MENOR QUE CERO";
    } else if (numero == 0 || numero == 1) {
        return 1;
    } else {
        let resultado = 1;
        for (let i = 2; i <= numero; i++) {
            resultado *= i;
        }
        return resultado;
    }

}

function imprimir(){

var numero = document.getElementById("numero").value;

console.log("EL FACTORIAL DEL NUMERO INGRESADO ES:" +factorial(numero));

}