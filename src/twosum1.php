<?php
//stringをvalに変換する
function twosum1($num){

    for($i=0; $i < count($num); $i++){
        echo $num[$i];
        echo"<BR>";
    }
}
function palindrom($str){
    //string型に戻す
    $str_string = strval($str);
    $str_reverse = strrev($str_string);
    if($str_string == $str_reverse){
        echo "true";
    }else{
        echo"false";
    }
}
//palindrom
$test = 111;
$strreslt = palindrom($test);
echo $strreslt;

//twosum
//twosum1
$hoge = [100,200,300];
$result = twosum1($hoge);
print_r($result);
?>
