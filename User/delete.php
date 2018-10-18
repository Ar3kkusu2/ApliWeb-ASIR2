<?php

$conn = new mysqli("localhost:3307", "root", "", "apliweb");

if (!$conn) {
     die("Conexion Fallida: ".mysqli_connect_error());
}

$user = $_POST["user"];

$query = "delete from users where user = '$user'";
$result = mysqli_query($conn, $query);

header('Location: '."users.php");