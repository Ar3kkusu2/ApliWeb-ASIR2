<?php
    $dia = date("l");
    $hora = date("H");
    $minuto = date("i");
    $asignatura = array(
        "Gestores de bases de datos",  //0
        "EIE", //1
        "Administracion de Sistemas operativos",  //2
        "Implantacion de Aplicaciones Web",  //3
        "Seguridad",  //4
        "Servicios red e internet",  //5
        "Ingles");  //6
    //echo var_dump($dia, $hora, $minuto);

    if ($dia == "Monday") {
        if ($hora < 8) {
            echo "No tienes clase";
        }
        elseif ($hora < 9 && $minuto < 55) {
            echo "Tienes $asignatura[0]";
        }
        elseif ($hora < 10 && $minuto < 50) {
            echo "Tienes $asignatura[1]";
        }
        elseif ($hora < 12 && $minuto < 40) {
            echo "Tienes $asignatura[2]";
        }
        elseif ($hora < 13 && $minuto < 10) {
            echo "Tienes Recreo";
        }
        elseif ($hora < 14) {
            echo "Tienes $asignatura[3]";
        }
        else {
            echo "No tienes clase";
        }
    }
        

    if ($dia == "Tuesday") {
        if ($hora < 8) {
            echo "No tienes clase";
        }
        elseif ($hora < 9 && $minuto < 55) {
            echo "Tienes $asignatura[3]";
        }
        elseif ($hora < 10 && $minuto < 50) {
            echo "Tienes $asignatura[4]";
        }
        elseif ($hora < 12 && $minuto < 40) {
            echo "Tienes $asignatura[5]";
        }
        elseif ($hora < 13 && $minuto < 10) {
            echo "Tienes Recreo";
        }
        elseif ($hora < 14) {
            echo "Tienes $asignatura[0]";
        }
        else {
            echo "No tienes clase";
        }
    }

    if ($dia == "Wednesday") {
        if ($hora < 8) {
            echo "No tienes clase";
        }
        elseif ($hora < 10 && $minuto < 50) {
            echo "Tienes $asignatura[4]";
        }
        elseif ($hora < 12 && $minuto < 40) {
            echo "Tienes $asignatura[2]";
        }
        elseif ($hora < 13 && $minuto < 10) {
            echo "Tienes Recreo";
        }
        elseif ($hora < 14) {
            echo "Tienes $asignatura[1]";
        }
        else {
            echo "No tienes clase";
        }
    }
    
    if ($dia == "Thursday") {
        if ($hora < 8) {
            echo "No tienes clase";
        }
        elseif ($hora < 10 && $minuto < 50) {
            echo "Tienes $asignatura[5]";
        }
        elseif ($hora < 12 && $minuto < 40) {
            echo "Tienes $asignatura[2]";
        }
        elseif ($hora < 13 && $minuto < 10) {
            echo "Tienes Recreo";
        }
        elseif ($hora < 14) {
            echo "Tienes $asignatura[3]";
        }
        else {
            echo "No tienes clase";
        }
    }

    if ($dia == "Friday") {
        if ($hora < 8) {
            echo "No tienes clase";
        }
        elseif ($hora < 10) {
            echo "Tienes $asignatura[4]";
        }
        elseif ($hora < 12) {
            echo "Tienes $asignatura[5]";
        }
        elseif ($hora < 13 && $minuto < 30) {
            echo "Tienes Recreo";
        }
        elseif ($hora < 15 && $minuto <30) {
            echo "Tienes $asignatura[6]";
        }
        else {
            echo "No tienes clase";
        }
    } 

    if ($dia == "Saturday" || $dia == "Sunday") {
        echo "No tienes clase";
    }
















