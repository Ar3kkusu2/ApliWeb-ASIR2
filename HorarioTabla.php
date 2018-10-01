<?php
$dia = date("N");
$hora = date("G");
$horario = array(
    array("Bases de datos","Aplicaciones","Seguridad","Redes","Seguridad"),
    array("EIE","Seguridad","Seguridad","Redes","Seguridad"),
    array("Sistemas","Redes","Sistemas","Sistemas","Redes"),
    array("Sistemas","Redes","Sistemas","Sistemas","Redes"),
    array("Aplicaciones","Bases de datos","EIE","Aplicaciones","Ingles"),
    array("Aplicaciones","Bases de datos","EIE","Aplicaciones","Ingles")
);

echo $horario[$hora-8][$dia-1];



echo "<center>HORARIO<br><br><table border=1 cellspacing=0 cellspadding=2 bordercolor='1701a5'>";
for($x = 0;$x < count($horario);$x++){
    if ($x == $horario[$hora-8][$dia-1]){
        echo "<tr background-color=red>";
    }   
    else {
        echo "<tr>";
    }
    for($y = 0;$y < count($horario[$x]);$y++) {
        echo "<td>".$horario[$x][$y]."</td>";
    }
    echo "</tr>";
}  
echo "</table></center>";
