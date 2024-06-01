<?php
class twoSum{
    public function Sum(array $num){
        $sum = 0;
        for($i=0; $i<count($num); $i++){
            $sum = $sum + $num[$i];
        }
        echo $sum;//配列の合計を調べた
    }
}

$twoSum = new twoSum();
$answer = $twoSum->Sum([1,2,3]);
echo $answer;
/*
$problem = new problem();
$ans = $problem->number42([3, 2, 1]);
echo $ans;*/
?>