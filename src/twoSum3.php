<?php

class twoSum3 {
    public function method($nums, $target) {
        // 値とそのインデックスを保持する連想配列
        $map = [];

        // 配列を走査
        for ($i = 0; $i < count($nums); $i++) {
            // 必要な補完数値を計算
            $complement = $target - $nums[$i];


            // 補完数値が連想配列のキーとして存在するかチェック
            //

            if (isset($map[$complement])) {
                // 存在する場合、解を返す
                return [$map[$complement], $i];
            }

            // 連想配列に値とそのインデックスを保存
            $map[$nums[$i]] = $i;
        }

        // 解が存在しない場合（ただし問題の制約上、この行は実行されないはず）
        return [];
    }
}
$twoSum3 = new twoSum3();
$answer = $twoSum3->method([5,4,6,7],10);
print_r($answer);
/*
$twoSum = new twoSum();
$answer = $twoSum->Sum([1,2,3]);
echo $answer;
*/