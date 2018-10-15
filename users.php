<?php

$conn = new mysqli("localhost:3307", "root", "", "apliweb");

if (!$conn) {
     die("Conexion Fallida: ".mysqli_connect_error());
}
//echo "Conexion Exitosa <br>";



$query = "SELECT User from users";
$result = mysqli_query($conn, $query);

while($line = mysqli_fetch_array($result)){
    echo $line[0]."<input type='button' name='Delete' value='Delete'>  <input type='button' name='Modify' value='Modify'><br>";
}