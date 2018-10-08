<?php

$user = $_POST["user"];
$pass = $_POST["pass"];


$conn = new mysqli("localhost:3307", "root", "", "apliweb");


if (!$conn) {
     die("Conexion Fallida: ".mysqli_connect_error());
}
echo "Conexion Exitosa";
echo "<br>";
$query = "SELECT user from users WHERE User='$user' and Password='$pass'";

$result =mysql_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_array($result, MYSQLI_NUM);
    echo $row[0];
}

if ($row) {
    echo "Accesso Concendido";
}else {
    echo "Accesso Denegado",
}
