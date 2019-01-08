<?php

/**
 * 插入排序
 * @author mallor <mallor@163.com>
 * @param array $data
 * @return void
 */
function insertSort(array &$data) //为什么要引用，如果数组大的话，那岂不是要copy一份数组出来
{
    $iLen = count($data); //获取数组的长度
    for ($i = 1; $i < $iLen; $i++) { //$i为什么要设置为1，为数组第一个则索引为0是只有一个，也就是有序的，但不用遍历
        $tmp = $data[$i];//待插的元素放在临时变量中
        //for 循环核心是链表的插入的操作
        for ($j = $i; $j > 0 && $data[$j - 1] > $tmp; $j--) {
            $data[$j] = $data[$j - 1]; //数组的元素往后移
        }
        $i != $j && $data[$j] = $tmp; //将待插的元素插入合适的位置
    }
}
 
$data = [10, 5, 9, 40, 20, 1];

insertSort($data);
echo '<pre>';
var_dump($data);
