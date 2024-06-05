<?php

class twoSum3{
    public function method(array $num){
        $sum = 0;
        for($i=0; $i<count($num); $i++){

            $sum = $sum + $num[$i];
        }

        echo $sum;
    }
}
$twoSum3 = new twoSum3();
$answer =$twoSum3->method([3,4,5,4]);
echo $answer;

/*
 * 整数からなる配列numsとある整数targetが与えられる．
このとき，足し合わせるとtargetになる２つの数のインデクスを返せ．

ただし，各入力はただ一つの解が存在し，同じ要素を2回使うことは出来ないものとする．
 */


