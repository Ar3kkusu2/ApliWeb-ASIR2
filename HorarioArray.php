<?php

$dia = date("N");
$hora = date("G");


$asignatura = array(
    "Bases de datos",  // --> 0
    "EIE",
    "Sistemas", 
    "Aplicaciones",  
    "Seguridad",  
    "Redes",  
    "Ingles"); // --> 6


$horario = array(
    array($asignatura[0],$asignatura[1],$asignatura[2],$asignatura[2],$asignatura[3],$asignatura[3]); //Lunes --> 0
    array($asignatura[3],$asignatura[4],$asignatura[5],$asignatura[5],$asignatura[0],$asignatura[0]); //Martes
    array($asignatura[4],$asignatura[4],$asignatura[2],$asignatura[2],$asignatura[1],$asignatura[1]); //Miercoles
    array($asignatura[5],$asignatura[5],$asignatura[2],$asignatura[2],$asignatura[3],$asignatura[3]); //Jueves
    array($asignatura[4],$asignatura[4],$asignatura[5],$asignatura[5],$asignatura[6],$asignatura[6]); //Viernes --> 4
)

if($dia == 6 || $dia == 7 || $hora < 8 || $hora > 14) {
    echo "Fiesta";
}

echo = $horario[$dia-1][$hora-8];