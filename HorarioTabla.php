<?php
$dia = date("l");
$hora = date("H");
$horario = array(
    array("Bases de datos","Aplicaciones","Seguridad","Redes","Seguridad"),
    array("EIE","Seguridad","Seguridad","Redes","Seguridad"),
    array("Sistemas","Redes","Sistemas","Sistemas","Redes"),
    array("Sistemas","Redes","Sistemas","Sistemas","Redes"),
    array("Aplicaciones","Bases de datos","EIE","Aplicaciones","Ingles"),
    array("Aplicaciones","Bases de datos","EIE","Aplicaciones","Ingles")
);



echo "<center>HORARIO<br><br><table border=1 cellspacing=0 cellspadding=2 bordercolor='1701a5'>";
for($x = 0;$x < count($horario);$x++){
    echo "<tr>";
    for($y = 0;$y < count($horario[$x]);$y++) {
        echo "<td>".$horario[$x][$y]."</td>";
    }
    echo "</tr>";
}  
echo "</table></center>";