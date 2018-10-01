<?php
$dia = date("l");
$hora = date("H");
$horario = array(
    array("Bases de datos","EIE","Sistemas","Sistemas","Aplicaciones","Aplicaciones"), //Lunes --> 0
    array("Aplicaciones","Seguridad","Redes","Redes","Bases de datos","Bases de datos"), //Martes
    array("Seguridad","Seguridad","Sistemas","Sistemas","EIE","EIE"), //Miercoles
    array("Redes","Redes","Sistemas","Sistemas","Aplicaciones","Aplicaciones"), //Jueves
    array("Seguridad","Seguridad","Redes","Redes","Ingles","Ingles") //Viernes --> 4
);

for($x = 0;$x < count($horario);$x++){
    for($y = 0;$y < count($horario[$x]);$y++) {
        echo $horario[$x][$y]."<br>";
    }
    echo "<br>"
}  