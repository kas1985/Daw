<?php

$a = "-3.1416";

printf("La variable \'\$a\' vale %+.2f", $a); 



$formulario=sprintf(<<<FORM

    <form action="#" method="post">
    <label for="motor">Motor: </label><input type="text" name="motor" id="motor">
    <input type="submit" value="enviar">
    </form>
    
FORM);

print $formulario;

$motor=$_POST["motor"];

if ($motor == "gasolina")
    printf("<p>El motor es de %s",$motor);
elseif ($motor== "diesel")
    print "El motor es Diesel";
elseif ($motor=="motocicleta")
    print "El motor es de motocicleta";
else 
    print "no es un motor valido";


switch ($motor) {
    case "gasolina":
        print "El motor es de Gasolina";
        break;
    case "diesel":
        print "El motor es Diesel";
        break;
    case "motocicleta":
        print "El motor es una motocicleta";
        break;
    default:
        print "El motor no es válido";
        break;
}
