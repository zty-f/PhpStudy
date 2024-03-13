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
