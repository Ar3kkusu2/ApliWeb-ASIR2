<?php

$cars = array("Volvo","BMW","Toyota");

for ($x = 0; $x < $cars.lenght; $++) {
    echo $cars[$x]."<br>";
}

echo "<br><br><br>";

foreach($cars as $car) {
    echo $car."<br>";
}