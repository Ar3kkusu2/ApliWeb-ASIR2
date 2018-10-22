<?php

$conn = new mysqli("localhost:3307", "root", "", "apliweb");

if (!$conn) {
     die("Conexion Fallida: ".mysqli_connect_error());
}

$user = $_POST["user"];
$pass = $_POST["pass"];

echo $user."<br>".$pass;

$query = "update users set Password = '$pass' where User = '$user'";
$result = mysqli_query($conn, $query);

//header('Location: '."users.php");