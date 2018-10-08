<?php

$username = $_POST['user'];
$password = $_POST['pass'];


$conn = new mysqli("localhost:3307", "root", " ", "apliweb");


if (!$conn) {
     die("Conexion Fallida: ".mysqli_connect_error());
}
echo "Conexion Exitosa";