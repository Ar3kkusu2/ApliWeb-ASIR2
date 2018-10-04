<?php

$user = $_POST['user'];
$pass = $_POST['pass'];


$mysqli = new mysqli("localhost", "root", "", "apliweb");



$q = mysql_query("SELECT Password FROM users WHERE User='$user'");

if ($q == $pass) {
    echo 'Estas dentro';
}else
    echo 'No no no no has dicho la palabra magica';