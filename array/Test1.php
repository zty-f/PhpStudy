<?php

$a1['x1'] = 2;
var_dump($a1);

$a2 = [
    'x1'=>2,
];
var_dump($a2);

//这两种写法是一样的
var_dump("----------------------------------------------------------");
$productParams = [
    'brand' => 100,
    'productIds' => [],
    'stuId' => 234,
    'option' => 2333,
];
for($i=0;$i<3;$i++){
    $productParams['productIds'][] = [
        'productId' => 1,
        'classId' => 2,
        'isChecked' => true,
    ];

}
var_dump($productParams);

var_dump("----------------------------------------------------------");

$productParams['a'] = 1;
$productParams['b'] = 1;
var_dump($productParams);

$cardParams            = [
    'brand'  => 120,
];

var_dump($cardParams);

$cardParams['brand'] = 100;

var_dump($cardParams);