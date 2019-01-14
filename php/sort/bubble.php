<?php

/**
 * 冒泡排序
 * @author mallor <mallor@163.com>
 * @param array $data
 * @return void
 */
function bubbleSort(array &$data)
{

    $iLen = count($data); //数组的长度
    for ($i = 1; $i < $iLen; $i++) {
        $bFlag = true; //设置标志
        for ($j = 0; $j < $iLen - $i; $j++) {
            if ($data[$j] > $data[$j + 1]) {//两两比较，两两交换
                list($data[$j], $data[$j + 1]) = [$data[$j + 1], $data[$j]];
                $bFlag = false; //说明无序状态下，得交换
            }
        }
        if ($bFlag) return; //有序的则退出循环
    }
}


$data = [10, 5, 9, 40, 20, 1];

bubbleSort($data);
echo '<pre>';
var_dump($data);
