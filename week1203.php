<?php
//return by value
function division(&$a,$y,$z = 10){
    return array($a,$y,$z);
}
$a= 10;
$b = 5;

$sum = division($a,$b);
print($sum[0]) + $sum[1] + $sum[2];