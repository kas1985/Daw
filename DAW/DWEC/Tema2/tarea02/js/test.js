//Ejercicio 1
alert("Ejercicio 1");
var palabra = prompt("Introduce una palabra");
var palabraInvertida = "";
console.log(palabra.length);
for (let i = 0; i < palabra.length; i++) {
    palabraInvertida = palabraInvertida + palabra[palabra.length-(i+1)];    
}
alert(palabra==palabraInvertida?"es un palindromo":"no es un palindromo");


//Ejercicio 2
alert("Ejercicio 2");
var nombre = prompt("Introduce tu nombre");
var edad = prompt("introduce tu edad");
alert("Hola " + nombre + ", has vivido: " + parseInt(edad)*365 + " dias");


//Ejercicio 3
alert("Ejercicio 3");
