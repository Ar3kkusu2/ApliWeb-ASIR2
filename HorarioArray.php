<?php

$dia = date("N");
$hora = date("G");


$asig = array(
    "Bases de datos",  // --> 0
    "EIE",
    "Sistemas", 
    "Aplicaciones",  
    "Seguridad",  
    "Redes",  
    "Ingles"); // --> 6


$horario = array(
    array($asig[0],$asig[1],$asig[2],$asig[2],$asig[3],$asig[3]); //Lunes --> 0
    array($asig[3],$asig[4],$asig[5],$asig[5],$asig[0],$asig[0]); //Martes
    array($asig[4],$asig[4],$asig[2],$asig[2],$asig[1],$asig[1]); //Miercoles
    array($asig[5],$asig[5],$asig[2],$asig[2],$asig[3],$asig[3]); //Jueves
    array($asig[4],$asig[4],$asig[5],$asig[5],$asig[6],$asig[6]); //Viernes --> 4
)

/*if($dia == 6 || $dia == 7 || $hora < 8 || $hora > 14) {
    echo "Fiesta";
}*/

echo = $horario[$dia-1][$hora-8];