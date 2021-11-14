<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agenda</title>
        <!-- estilos para la web -->
        <style>
            html{
                background-color: lightblue;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 12px;
            }
            h2 {
                text-align: center;
            }
            h1 {
                text-align: center;
                color: red;
            }
            fieldset {
                width: 20%;
                margin: auto;
            }
            label {
                display: inline-block;
                width: 40%;
                font-size: 16px;
                font-weight: bold;
            }
            input[type="submit"] {
                margin-top: 5%;
            }
            input[type="reset"]{
                color: lightcoral;
            }            
        </style>
    </head>
    <body>
        <h2>Agenda de Carlos</h2>

        <?php
            // comprobacion de si se le ha dado al boton de añadir contacto
            if(isset($_POST["aCont"])){
                // guardamos los valores de nombre y telefono
                $nombre= $_POST["nombre"];
                $telefono= $_POST["telefono"];   
                                
                // si se han enviado los datos ocultos con los datos antiguos de la agenda
                if (isset($_POST["agenda"])){
                    // cremos el array con los datos antiguos 
                    $entradas=$_POST["agenda"];    
                // si no hay entradas antiguas crear array                                  
                } else {
                    $entradas=array();
                }
                
                // si el nombre esta vacio
                if (empty($nombre)) {
                    print "<h1>Hay que poner un nombre !!!</h1>";
                // si no esta vacio
                } else {
                    // comprobamos si el nombre existe
                    if (comprobarNombre($entradas,$nombre)) {
                        // si no tiene telefono borramos la entrada
                        if (empty($telefono)) {
                            unset($entradas[$nombre]);
                        // si tiene telefono lo sustituimos
                        } else {
                            $entradas[$nombre]=$telefono;
                        }
                    // si el nombre no existe ya en la agenda
                    } else {
                        // si el telefono esta vacio se advierte
                        if (empty($telefono)) {
                            print "<h1>No has puesto un numero de telefono !!!</h1>";
                        // si todo esta bien se añade el contacto nuevo
                        } else {
                            $entradas[$nombre]=$telefono;
                        }
                    }
                }
                
                // mostrar los datos de la agenda
                if (!empty($entradas)){
                    print "<fieldset><legend>Datos Agenda</legend>";
                    foreach ($entradas as $nom => $tel) {
                        printf("<label>%s</label><label>%d</label></br>",$nom, $tel);
                    }
                    print "</fieldset>";
                }             
            // si se le ha dado al boton de vaciar agenda    
            } elseif (isset($_GET["vAgen"])) {                
                    unset($entradas);                
                print "<h1>Has vaciado la agenda!!</h1>";
            }
        ?>
        <!-- Formulario para nuevos contactos -->
        <form action="<?php print $_SERVER['PHP_SELF'] ?>" method="post">
            <fieldset>
                <legend>Nuevo Contacto</legend>
                <label for="nombre">Nombre: </label><input type="text" name="nombre" id="nom"></br>
                <label for="telefono">Telefono: </label><input type="tel" name="telefono" id="tel"></br>
                <input type="submit" name="aCont" value="Añadir Contacto">
                <input type="reset" value="Limpiar Campos">                
                <!-- enviar los datos del array con los contactos si este ya se ha creado -->
                <?php if(isset($entradas))
                    foreach ($entradas as $nom => $tel) {
                        print "<input type=\"hidden\" name=\"agenda[$nom]\" value=\"$tel\">";    
                    }                    
                ?>
            </fieldset>
        </form>        
        <?php 
            // formulario de limipieza de agenda
            if (!empty($entradas)){
                print "<form action=" .$_SERVER['PHP_SELF']. " method=\"get\">
                    <fieldset><legend>Vaciar Agenda</legend>                    
                    <input type=\"submit\" name=\"vAgen\" value=\"Vaciar\">
                    </fieldset></form>";                
            }    
            
            // funcion para comprobar si el nombre existe en la agenda
            function comprobarNombre($agenda, $nombre){
                foreach ($agenda as $nom => $tel) {                    
                    if ($nombre==$nom){
                        return true;                        
                    }                        
                }
                return false;
            }
        ?>        
    </body>
</html>