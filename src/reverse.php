<?php
function palindrome($num_before){
    //strval整数に変換
    //文字列をstrrev反転
    $num = strval($num_before);
    $num_reverse = strrev($num);

    if($num == $num_reverse){
        echo "true";
    }else{
        echo"false";
    }
}
$value = 111;
$ans = palindrome($value);
print $ans;

?>