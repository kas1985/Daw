//Ejercicio 1
function ejercicio1(){
    let palabra = prompt("Introduce una palabra");
    let palabraInvertida = "";
    console.log(palabra.length);
    for (let i = 0; i < palabra.length; i++) {
        palabraInvertida = palabraInvertida + palabra[palabra.length-(i+1)];    
    }
    alert(palabra==palabraInvertida?"es un palindromo":"no es un palindromo");
}


//Ejercicio 2
function ejercicio2(){
    let nombre = prompt("Introduce tu nombre");
    let edad = prompt("introduce tu edad");
    alert("Hola " + nombre + ", has vivido: " + parseInt(edad)*365 + " dias");
}


//Ejercicio 3
function ejercicio3(){
    let base = 23;    
    let suma = 0;
    let multiplicador = 1;    
    let multiplo = 0;    
    while (multiplo < 1000){
        multiplo = base * multiplicador;
        suma += multiplo;
        multiplicador++;    }

    alert("La suma de todos los multiplos de 23 anteriores a 1000 es: " + suma);

}


//Ejercicio 4
function ejercicio4(){
    let numeracion = 1;
    let alto = prompt("introduce el alto de la tabla");
    let ancho = prompt("introduce el ancho de la tabla");
    document.write("<table>");
    for ( i = 0; i < alto; i++){
        document.write("<tr>");
        for (ii = 0; ii < ancho; ii++){
            document.write("<td>" + numeracion + "</td>");
            numeracion++;
        }
        document.write("</tr>");
    }
    document.write("</table>");
}


//Ejercicio 5
function ejercicio5(){
    let numeracion = 1;
    let alto = prompt("introduce el alto de la tabla");
    let ancho = prompt("introduce el ancho de la tabla");
    document.write("<table>");
    for (let i = 0; i < alto; i++){
        document.write("<tr>");
        for (let ii = 0; ii < ancho; ii++){
            let celda = primo(numeracion) ? "<td>primo</td>" : "<td>" + numeracion + "</td>";
            document.write(celda);
            numeracion++;
        }
        document.write("</tr>");
    }
    document.write("</table>");    

    // comprobacion de primo
    function primo(numero){
        console.log(numeracion);
        if (numero == 1 || numero == 2){
            return true;
        } 
        for (let i = 2; i < numero; i++){            
            if (numero%i==0)
                return false;
        }
        return true;
    
    }
}
