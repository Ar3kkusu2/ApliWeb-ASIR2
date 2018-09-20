<?php
    $dia = date("l");
    $hora = date("h");
    echo var_dump($hora);


    if ($dia == "Thursday") {
        if ($hora < 8) {
            echo "No tienes clase";
        }
        elseif ($hora < 10) {
            echo "Tienes Redes";
        }
        elseif ($hora < 12) {
            echo "Tienes Sistemas";
        }
        elseif ($hora < 14) {
            echo "Tienes Aplicaciones";
        }
        else {
            echo "No tienes clase";
        }
    }

















