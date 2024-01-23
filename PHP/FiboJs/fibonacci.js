function generarFibonacci() {
    var tamanio = parseInt(document.getElementById('tamanio').value);

    if (!isNaN(tamanio) && tamanio > 0) {
        var fibonacci = [0, 1];

        for (var i = 2; i < tamanio; i++) {
            fibonacci[i] = fibonacci[i - 1] + fibonacci[i - 2];
        }

       // document.getElementById('serie').innerText = 'Serie de Fibonacci: ' + fibonacci.join(', ');
        console.log("LA SERIE FIBONACCI GENERADA ES: "+fibonacci.join(", "))
    } else {
        alert('Por favor, ingrese un tamaño válido mayor a 0.');
    }
}