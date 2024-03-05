<?php

$a1 = ["1","2","3","4"];
$a2 = ["5","2","3","4","8","7"];


$res = !($a1&&$a2);

echo $res;

//$r1=array_intersect($a1,$a2);
//
//echo print_r($r1);

$r2=!array_diff($a1,$a2);

echo var_dump($r2);

// && || ！运算输出数组有则为true，没有则为false