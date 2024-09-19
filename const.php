<?php
const X = 45;
const Y = 78;
    
function add() {
    $res = X + Y;
    echo "the sum of number: ", $res ,"<br>";
}

add();
?>


<?php
$num = 7;
$result = ($num % 2 == 0) ? "even" : "odd";
echo "The number $num is $result.";
?>


print first non null val using