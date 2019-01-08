<?php
function selSort(array &$data)
{

    $iLen = count($data); //数组的长度
    for ($i = 0; $i < $iLen; $i++) {
        $minIndex = $i;//将第$i个视为最小索引
        //选择$i与剩余数组的值比较，合适作为最小索引，选择排序必须将剩余的数组遍历一次才能找到最合适的索引，这就是选择排序的缺点
        for ($j = $i + 1; $j < $iLen; $j++) {
            $data[$minIndex] > $data[$j] && $minIndex = $j;
        }
        //待排序的索引与最小索引交换
        list($data[$i], $data[$minIndex]) = [$data[$minIndex], $data[$i]];
    }
}


$data = [10, 5, 9, 40, 20, 1];

selSort($data);
echo '<pre>';
var_dump($data);
