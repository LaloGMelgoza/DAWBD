function ejercicio1() {

	let n = prompt("Introduce un numero.");

	for(let i = 1; i <= n; i++) {
		document.write(i + "    ");
		document.write(i * i + "     ");
		document.write(i * i * i + "     <br>");
	}
}

function ejercicio2() {
	let n1 = Math.floor((Math.random() * 101));
	let n2 = Math.floor((Math.random() * 101));
	let tiempoAntes = new Date();
	let comparaTiempoAntes = tiempoAntes.getTime();
	let usuarioInput = prompt("Cual seria la suma de " + n1 + " mas " + n2 + "?");
	let suma = n1 + n2;
	if(suma == usuarioInput) {
		document.write("Tu respuesta es correcta.");
	}
	else {
		document.write("Tu respuesta es incorrecta, la respuesta correcta es: " + suma + ".");
	}
	let tiempoDespues = new Date();
	let comparaTiempoDespues = tiempoDespues.getTime();
	let tiempoTranscurrido = ((comparaTiempoDespues - comparaTiempoAntes) / 1000);
	document.write("<br><br>Te tomo " + tiempoTranscurrido + " segundos contestar.");
}

function ejercicio3() {
	let largo = Math.floor((Math.random() * 6) + 5);
	let arreglo = [];
	let neg = 0;
	let pos = 0;
	let zero = 0;
	for(let i = 0;i < largo;i++) {
		arreglo[i] = Math.floor((Math.random() * 11) - 5);
		if(i == largo) {
			document.write(arreglo[i] + " ");
		}
		document.write(arreglo[i] + " ");
		if(arreglo[i] < 0) {
			neg += 1;
		}
		else if(arreglo[i] == 0) {
			zero += 1;
		}
		else if(arreglo[i] > 0) {
			pos += 1;
		}
	}
	document.write("<br><br>Hay " + neg + " numeros negativos, " + pos + " numeros positivos y " + zero + " numeros iguales a 0.");
}

function ejercicio4() {
	let prom = [0,0,0,0,0];
	var mat = [row1 = [5], row2 =[5], row3 = [5], row4 = [5], row5 = [5]];
	for(let i = 0; i<5; i++){
		row1[i] = Math.floor((Math.random()*10));
		prom[i] = prom[i] + row1[i];
	}
	for(let i = 0; i<5; i++){
		row2[i] = Math.floor((Math.random()*10));
		prom[i] = prom[i] + row2[i];
	}
	for(let i = 0; i<5; i++){
		row3[i] = Math.floor((Math.random()*10));
		prom[i] = prom[i] + row3[i];
	}
	for(let i = 0; i<5; i++){
		row4[i] = Math.floor((Math.random()*10));
		prom[i] = prom[i] + row4[i];
	}
	for(let i = 0; i<5; i++){
		row5[i] = Math.floor((Math.random()*10));
		prom[i] = prom[i] + row5[i];
	}
	for(let i = 0; i<5;i++){
			prom[i] = prom[i] / 5;
			document.write(mat[i] + " Promedio: " +prom[i]);
			document.write("<br>");
	}
}

function ejercicio5() {
	let n = prompt("Introduce un numero para invertir: ");
	let i = 0;
	document.write("Tu numero: " + n + "<br><br>");
	while(n>0) {
		i = i * 10 + n % 10;
		n = Math.floor(n / 10);
	}
	document.write("Invertido: " + i);
}

function ejercicio6() {
	

}

function preguntas() {
	document.write("<b>¿Qué diferencias y semejanzas hay entre Java y JavaScript?</b><br><br>");
	document.write("<br><br><br>");
	document.write("<b>¿Qué métodos tiene el objeto Date? (Menciona al menos 5*)</b><br><br>");
	document.write("<b>¿Qué métodos tienen los arreglos? (Menciona al menos 5*)</b><br><br>");
	document.write("<b>¿Cómo se declara una variable con alcance local dentro de una función?</b><br><br>");
	document.write("<b>¿Qué implicaciones tiene utilizar variables globales dentro de funciones?</b><br><br>");
	document.write("<b>¿Qué método de String se puede utilizar para buscar patrones con expresiones regulares?¿Para qué podrías utilizar esto en una aplicación web?</b><br><br>");
}









