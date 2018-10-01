<?php

$horario = array(
    array("Bases de datos","EIE","Sistemas","Sistemas","Aplicaciones","Aplicaciones"), //Lunes --> 0
    array("Aplicaciones","Seguridad","Redes","Redes","Bases de datos","Bases de datos"), //Martes
    array("Seguridad","Seguridad","Sistemas","Sistemas","EIE","EIE"), //Miercoles
    array("Redes","Redes","Sistemas","Sistemas","Aplicaciones","Aplicaciones"), //Jueves
    array("Seguridad","Seguridad","Redes","Redes","Ingles","Ingles") //Viernes --> 4
);

foreach($horario as $x){
    foreach($x as $y){
    echo $horario[$x][$y]."<br>";
    }
}