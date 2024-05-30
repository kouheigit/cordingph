<?php
//stringをvalに変換する
function twosum1($num){

    for($i=0; $i < count($num); $i++){
        echo $num[$i];
        echo"<BR>";
    }
}
$hoge = [100,200,300];
$result = twosum1($hoge);
print_r($result);
?>
