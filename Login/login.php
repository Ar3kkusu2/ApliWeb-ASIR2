<?php

$user = $_POST["user"];
$pass = $_POST["pass"];


$conn = new mysqli("localhost:3307", "root", "", "apliweb");


if (!$conn) {
     die("Conexion Fallida: ".mysqli_connect_error());
}
//echo "Conexion Exitosa <br>";

$query = "SELECT User from users WHERE User='$user' AND Password='$pass'";

$result = mysqli_query($conn, $query);
$line = mysqli_fetch_array($result, MYSQLI_NUM);

if ($result) {    
    echo $line[0]." ";
}

if ($line) {
    echo "Accesso Concendido";
}else {
    echo "Accesso Denegado";
}
