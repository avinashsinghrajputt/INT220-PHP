<?php
const X = 45;
const Y = 78;

function add() {
    $res = X + Y;
    echo "The sum of the numbers: ", $res ,"<br>";
}

add();

$num = 7;
$result = ($num % 2 == 0) ? "even" : "odd";
echo "The number $num is $result.<br>";

function firstNonNull(...$values) {
    foreach ($values as $value) {
        if ($value !== null) {
            return $value;
        }
    }
    return null;
}

$val1 = null;
$val2 = null;
$val3 = 5;
$val4 = 10;

echo "The first non-null value is: ", firstNonNull($val1, $val2, $val3, $val4);
?>