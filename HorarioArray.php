<?php

$dia = date("N");
$hora = date("G");

$horario = array(
    array("Bases de datos","EIE","Sistemas","Sistemas","Aplicaciones","Aplicaciones"), //Lunes --> 0
    array("Aplicaciones","Seguridad","Redes","Redes","Bases de datos","Bases de datos"), //Martes
    array("Seguridad","Seguridad","Sistemas","Sistemas","EIE","EIE"), //Miercoles
    array("Redes","Redes","Sistemas","Sistemas","Aplicaciones","Aplicaciones"), //Jueves
    array("Seguridad","Seguridad","Redes","Redes","Ingles","Ingles") //Viernes --> 4
);

if($dia == 6 || $dia == 7 || $hora < 8 || $hora > 14) {
    echo "Fiesta";
}

echo $horario[$dia-1][$hora-8];

/*
       0       1       2
    ------------------------
  0 |   a   |   b   |  c   |  
    ------------------------
  1 |   d   |   e   |  f   |   
    ------------------------

*/