let opa;
let opb;
let opera;

function init(){
	//variables
	let resu = document.getElementById("resu");
	let reset = document.getElementById("reset");
	let suma = document.getElementById("suma");
	let res = document.getElementById("res");
	let multi = document.getElementById("multi");
	let divi = document.getElementById("divi");
	let igual = document.getElementById("igual");
	let uno = document.getElementById("uno");
	let dos = document.getElementById("dos");
	let tres = document.getElementById("tres");
	let cuatro = document.getElementById("cuatro");
	let cinco = document.getElementById("cinco");
	let seis = document.getElementById("seis");
	let siete = document.getElementById("siete");
	let ocho = document.getElementById("ocho");
	let nueve = document.getElementById("nueve");
	let cero = document.getElementById("cero");

	//eventos
	uno.onclick = function(e){
		resu.textContent = resu.textContent + "1";
	}
	dos.onclick = function(e){
		resu.textContent = resu.textContent + "2";
	}
	tres.onclick = function(e){
		resu.textContent = resu.textContent + "3";
	}
	cuatro.onclick = function(e){
		resu.textContent = resu.textContent + "4";
	}
	cinco.onclick = function(e){
		resu.textContent = resu.textContent + "5";
	}
	seis.onclick = function(e){
		resu.textContent = resu.textContent + "6";
	}
	siete.onclick = function(e){
		resu.textContent = resu.textContent + "7";
	}
	ocho.onclick = function(e){
		resu.textContent = resu.textContent + "8";
	}
	nueve.onclick = function(e){
		resu.textContent = resu.textContent + "9";
	}
	cero.onclick = function(e){
		resu.textContent = resu.textContent + "0";
	}

	reset.onclick = function(e){
		resetear();
	}
	suma.onclick = function(e){
		opa = resu.textContent;
		opera = "+";
		limpiar();
	}
	res.onclick = function(e){
		opa = resu.textContent;
		opera = "-";
		limpiar();
	}
	divi.onclick = function(e){
		opa = resu.textContent;
		opera = "/";
		limpiar();
	}
	multi.onclick = function(e){
		opa = resu.textContent;
		opera = "*";
		limpiar();
	}
	igual.onclick = function(e){
		opb = resu.textContent;
		resolver();
	}

function limpiar(){
	resu.textContent = "";
}

function resetear(){
	resu.textContent = "";
	opa = 0;
	opb = 0;
	opera = 0;
}

function resolver(){
	let resul = 0;
	switch(opera){
		case "+":
		resul = parseFloat(opa) + parseFloat(opb);
		break;

		case "-":
		resul = parseFloat(opa) - parseFloat(opb);
		break;

		case "*":
		resul = parseFloat(opa) * parseFloat(opb);
		break;

		case "/":
		resul = parseFloat(opa) / parseFloat(opb);
		break;
	}
	resetear();
	resu.textContent = resul;
}


	
}