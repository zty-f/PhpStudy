<?php

$a1 = [
    'x'=>1,
    'y'=>2,
];
var_dump($a1);

var_dump($a1['x']);
// var_dump($a1['z']);
var_dump($a1['z']??100);

function x(int $a){
    var_dump($a);
}

x($a1['ccc']??'1000');