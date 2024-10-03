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
echo "<br>";

// Combine two arrays and print the common elements
$array1 = array(1, 2, 3, 4, 5);
$array2 = array(4, 5, 6, 7, 8);

$common_elements = array_intersect($array1, $array2);
echo "Common elements are: ";
foreach($common_elements as $element){
    echo $element." ";
}
echo "<br>";

// Print elements that are in $array1 but not in $array2
$diff_elements = array_diff($array1, $array2);
echo "Elements in array1 but not in array2: ";
foreach($diff_elements as $element){
    echo $element." ";
}
echo "<br>";

?>