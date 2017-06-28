<?php
/** 冒泡排序
 * Created by PhpStorm.
 * User: GraydonChen
 * Date: 2017/6/28
 * Time: 11:11
 */

$arr = array(10,4,1,55,2,22,11,222,2);
var_dump(count($arr));
    for ($i = 0; $i<=count($arr); $i++){
        for ($j = 0; $j<count($arr)-1; $j++){
            if($arr[$j] > $arr[$j+1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
print_r($arr);

