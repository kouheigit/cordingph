<?php

function twoSum($num,$target)
{
    //countでの出力
    for ($i=0; $i < count($num); $i++) {
        echo $num[$i];
    }
    echo $target;
}

$num = [10,11,12,13];
$target = "これは配列の出力結果です";
$result1 = twoSum($num,$target);
echo $result1;