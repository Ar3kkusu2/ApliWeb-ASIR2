<?php

$conn = new mysqli("localhost:3307", "root", "", "apliweb");

if (!$conn) {
     die("Conexion Fallida: ".mysqli_connect_error());
}
//echo "Conexion Exitosa <br>";



$query = "SELECT User from users";
$result = mysqli_query($conn, $query);
echo "<table border='5px solid black'><tr><th colspan=3>Name:</th></tr>";
while($line = mysqli_fetch_array($result)){
    echo "<tr><td>".$line[0]."</td>";
    echo "<td><input type='button' name='Delete' value='Delete'></td><td><input type='button' name='Modify' value='Modify'></td>";
}
echo "</table>";