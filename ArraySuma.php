<?php

$a = array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,11,12)
);

$s == 0

for($x = 0;$x < count($a);$x++){
    for($y = 0;$y < count($a[$x])) {
        $s = $s + $a[$x][$y];
    }
}
echo $s