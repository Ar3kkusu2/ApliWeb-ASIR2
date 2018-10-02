<?php
$dia_now = date("N");
$hora_now = date("G");
$horario = array(
    array("Bases de datos","Aplicaciones","Seguridad","Redes","Seguridad"),
    array("EIE","Seguridad","Seguridad","Redes","Seguridad"),
    array("Sistemas","Redes","Sistemas","Sistemas","Redes"),
    array("Sistemas","Redes","Sistemas","Sistemas","Redes"),
    array("Aplicaciones","Bases de datos","EIE","Aplicaciones","Ingles"),
    array("Aplicaciones","Bases de datos","EIE","Aplicaciones","Ingles")
);

echo $horario[$hora_now-8][$dia_now-1];



echo "<center>HORARIO<br><br><table border=1 cellspacing=0 cellspadding=2 bordercolor='1701a5'>";
/*for($x = 0;$x < count($horario);$x++){
    echo "<tr>";
   
    for($y = 0;$y < count($horario[$x]);$y++) {
        if ($x == $hora-8 && $y == $dia-1){
            echo "<td style='background-color:red'>";
        }   
        else {
            echo "<td>";
        }
        echo $horario[$x][$y]."</td>";
    }
    echo "</tr>";
}  */



foreach($horario as $x => $hora){
    echo "<tr>";   
    foreach($x as $y => $dia) {
        if ($x == $hora_now-8 && $y ==$dia_now-1){
            echo "<td style='background-color:red'>";
        }   
        else {
            echo "<td>";
        }
        echo $y."</td>";
    }
    echo "</tr>";
}  
echo "</table></center>";