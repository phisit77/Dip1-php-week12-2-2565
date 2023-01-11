<?php
function add($a,$b){
    print($a + $b . "<br />");
}
add(10,5); //called function

function multiply($a,$b){
    // return [$a,$b];
    return array($a,$b);
}

[$a,$b] = multiply(10,5);
print($a+$b);

?>