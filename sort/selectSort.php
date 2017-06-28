<?php
/** 选择排序法
 * 选择排序法的思路：就是再第一次循环中，假设第一个数是最小的；然后跟第二个数比较，一直比到最后，找出最小值，然后把最小值跟第一个数的位置互换；
 * 再进行下一次循环，找出最小值跟第二个位置的数互换；一直循环数组的个数减去1次；数组就成了有序的了
 * Created by PhpStorm.
 * User: GraydonChen
 * Date: 2017/6/28
 * Time: 12:13
 */

$arr = array(10,4,1,55,2,22,11,222,22);
for($i=0; $i<count($arr)-1; $i++){
    $minVal = $arr[$i];
    $minIndex = $i;
    for ($j = $i+1;$j<count($arr);$j++){
        if($minVal > $arr[$j]){
            $minVal = $arr[$j];
            $minIndex = $j;
        }
    }
    $temp = $arr[$i];
    $arr[$i] = $arr[$minIndex];
    $arr[$minIndex] = $temp;
}
print_r($arr);