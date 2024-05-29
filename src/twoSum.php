<?php
function twoSum($num,$target){
    for($i=0; $i < count($num); $i++){
        echo $num[$i];
    }
    echo $target;
}
$num = [100,200,300,400];
$target = "ナメック";
$result = twoSum($num,$target);
echo $result;

?>