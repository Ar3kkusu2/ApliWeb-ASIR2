<?php

$user = $_POST['user'];
$pass = $_POST['pass'];


$mysqli = new mysqli("localhost:3307", "root", " ", "apliweb");


if (!$mysqli) {
     die("Conexion Fallida: ".mysqli_connect_error());
}
echo "Conexion Exitosa";