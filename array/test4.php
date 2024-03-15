<?php

$arr =[
    'a' => 2233,
    'b' => 4444,
    'c' => '',
];

var_dump($arr['a']);
var_dump($arr['b']);
var_dump($arr['c']);
var_dump($arr['d']);  //会报错 Undefined index: d 不影响流程执行

var_dump(1111111);

// 实现一个简单的递归
function test($arr, $key)
{
    if (empty($arr[$key])) {
        return '';
    }
    return $arr[$key];
}
var_dump(test($arr, '4'));

// 数组的遍历
$arr = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
    'd' => 4,
];
foreach ($arr as $key => $value){
    echo $key . '=>' . $value . '</br>';
}