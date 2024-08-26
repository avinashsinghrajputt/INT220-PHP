<?php

$x =5;
$y=10;

function add(){
    //
    global $x,$y;
    return $x+$y;
}
$result= add();
echo $result;

?>