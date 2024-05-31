<?php
function ReverseLing(array $int){
    $reverse = array_reverse($int);
    echo $reverse;
}
$val = [1,2,3,4,5];
$result = ReverseLing($val);
print_r($result);