function calcular(){
    let peso = document.getElementById('peso').value;
    let alt = document.getElementById('alt').value;
    let imc
    if(alt < 1 || peso < 1){
        document.getElementById('resultado').innerHTML = 'Ingrese datos validos para el calculo adecuado';
    }else{
        imc = peso/(alt * alt);
        document.getElementById('resultado').innerHTML = 'Su indice de masa corporal es de: '+ imc.toFixed(2);
        cambiarIMG(imc);
    }

    console.log(imc);
}

function cambiarIMG(imc){
    var imagen = document.getElementById('foto');
    if(imc < 18.5){
        //bajo peso
        imagen.src = "img/pesobajo.png"
    }else if(imc > 18.5 && imc < 24.9){
        //peso normal
        imagen.src = "img/pesoideal.png"
    }else if(imc > 25 && imc < 29.9){
        //sobrepeso
        imagen.src = "img/sobrepeso.png"
    }else if(imc > 30 && imc < 34.9){
        //obesidad
        imagen.src = "img/obesidad.png"
    }else if(imc > 35){
        //obesidad morbida
        imagen.src = "img/obesidadmorbida2.png"
    }
}