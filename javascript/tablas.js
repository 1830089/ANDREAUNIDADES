function Multiplicacion() {
    let main = document.getElementById('main')
    let numero = document.getElementById('numero').value
    let multiplicado = document.getElementById('multiplicado').value

    let tablaHTML = document.createElement('table')
    let tablaEncabezado = document.createElement('thead')
    let tablaFila = document.createElement('tr')

    let tablaMultiplo = document.createElement('th')
    tablaMultiplo.innerText = 'Multiplo '
    tablaFila.appendChild(tablaMultiplo)

    let tablaResultado = document.createElement('th')
    tablaResultado.innerText = 'Resultado'
    tablaFila.appendChild(tablaResultado)

    tablaEncabezado.appendChild(tablaFila)
    tablaHTML.appendChild(tablaEncabezado)

    for (i = 1; i <= multiplicado; i++) {
        let fila = document.createElement('tr')

        let multiplicador = document.createElement('td')
        multiplicador.innerText = i

        let resultado = document.createElement('td')
        resultado.innerText = i * numero

        fila.appendChild(multiplicador)
        fila.appendChild(resultado)
        tablaHTML.appendChild(fila)
    }

    main.appendChild(tablaHTML)
}