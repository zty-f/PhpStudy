<?php


$courseOne=array("0","1");
$courseTwo=array("1","2,3");
var_dump($courseOne);
var_dump($courseTwo);
var_dump($courseOne[0]);
var_dump($courseTwo[0]);
var_dump(!isset($courseOne[0]));
var_dump(!isset($courseTwo[0]));
    //过滤掉不限的属性设置
    $courseOne = array_filter($courseOne);
    $courseTwo = array_filter($courseTwo);
var_dump($courseOne[0]);
var_dump($courseTwo[0]);
var_dump(!isset($courseOne[0]));
var_dump(!isset($courseTwo[0]));
        //课程属性不限,那么属性之间一定有交集,继续
        if (!isset($courseOne[0]) || !isset($courseTwo[0])) {
            echo 111112222222;
            die();
        }

        //课程都存在的属性,判断他们之间属性值是否有交集,有交集就说明课程范围有交叉的可能性; 没有交集就不可能交叉return false
        $courseOneAttributes = explode(',', $courseOne[0]);
        $courseTwoAttributes = explode(',', $courseTwo[0]);
        if (empty(array_intersect($courseOneAttributes, $courseTwoAttributes))) {
            echo "false";
        }else{
            echo "true";
        }
