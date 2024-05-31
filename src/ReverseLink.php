<?php
function ReverseLink(array $int){
    $reverse = array_reverse($int);
    print_r($reverse);
}
$val = [1,2,3,4,5];
$result = ReverseLink($val);
print_r($result);