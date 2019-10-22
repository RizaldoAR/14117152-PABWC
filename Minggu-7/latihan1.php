<?php

function swap (&$value1, &$value2){
    $a=$value2;
    $value2=$value1;
    $value1=$a;

}

$c=5;
$b=3;
echo $c,$b;
echo " ";
swap($c,$b);
echo $c,$b;
?>
