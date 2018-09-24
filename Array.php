<?php

//https://www.w3schools.com/php/php_arrays_multi.asp

$cars = array("Volvo","BMW","Toyota");

for ($x = 0; $x < count($cars); $x++) {
    echo $cars[$x]."<br>";
}

echo "<br><br><br>";

foreach($cars as $coche) {
    echo $coche."<br>";
}