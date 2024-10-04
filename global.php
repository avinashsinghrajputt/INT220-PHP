<?php

$x = 5;
$y = 10;

function add() {
    global $x, $y;
    return $x + $y;
}

function multiply() {
    global $x, $y;
    return $x * $y;
}

function findMax() {
    global $x, $y;
    return max($x, $y);
}

$result = add();
echo "Sum: " . $result . "<br>";

$result = multiply();
echo "Product: " . $result . "<br>";

$result = findMax();
echo "Maximum: " . $result . "<br>";

?>