<?php

$arr = array(23,45,29,34,50,19,67,45,23,34);
$unique = array_unique($arr);
sort($unique);
$max = max($unique);
$min = min($unique);
echo "Largest age is : ".$max;
echo "<br>";
echo "Smallest age is : ".$min;
echo "<br>";
echo "Unique age is : ";
foreach($unique as $value){
    echo $value." ";
}

//write a php script to combine two arrays and print the common elements from the following indexed arrays.
//array diff
//array intersect

?>