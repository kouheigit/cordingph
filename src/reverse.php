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

/*
function isPalindrome($num) {
    // 数値を文字列に変換
    $str = strval($num);

    // 文字列を逆順にする
    $str_reverse = strrev($str);

    // 元の文字列と逆順にした文字列を比較
    if ($str == $str_reverse) {
        return true;
    } else {
        return false;
    }
}

// 使用例
$num1 = 200;
$num2 = 202;

$result1 = isPalindrome($num1);
$result2 = isPalindrome($num2);

print_r($result1); // false
echo "\n";
print_r($result2); // true
*/
?>