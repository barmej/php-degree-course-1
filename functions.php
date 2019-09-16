<?php

function sum($x, $y){
    return $x + $y;
}

$example = sum(5,10);

echo $example;

echo "<br>";

echo sum(10, $example);

?>