<?php
//twosum
function twoSum($nums, $target) {
    // 値とそのインデックスを保持する連想配列
    $map = [];

    // 配列を走査
    for ($i = 0; $i < count($nums); $i++) {
        // 必要な補完数値を計算
        $complement = $target - $nums[$i];

        // 補完数値が連想配列に存在するかチェック
        if (array_key_exists($complement, $map)) {
            // 存在する場合、解を返す
            return [$map[$complement], $i];
        }

        // 連想配列に値とそのインデックスを保存
        $map[$nums[$i]] = $i;
    }

    // 解が存在しない場合（ただし問題の制約上、この行は実行されないはず）
    return [];
}

// 使用例
$nums1 = [2, 7, 11, 15];
$target1 = 9;
$result1 = twoSum($nums1, $target1);
print_r($result1); // [0, 1]

$nums2 = [3, 2, 4];
$target2 = 6;
$result2 = twoSum($nums2, $target2);
print_r($result2); // [1, 2]

$nums3 = [3, 3];
$target3 = 6;
$result3 = twoSum($nums3, $target3);
print_r($result3); // [0, 1]
?>