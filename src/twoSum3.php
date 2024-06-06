<?php

class twoSum3 {
    public function method($nums, $target) {

        $map = [];


        for ($i = 0; $i < count($nums); $i++) {

            $complement = $target - $nums[$i];



            if (isset($map[$complement])) {

                return [$map[$complement], $i];
            }

            $map[$nums[$i]] = $i;
            var_dump($map);

        }

        return [];

    }

}
$twoSum3 = new twoSum3();
$answer = $twoSum3->method([5,3,2,4,6],10);
print_r($answer);
