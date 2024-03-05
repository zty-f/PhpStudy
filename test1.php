<?php

// 变量，类似golang的命名规则，然后前面加上$，随意取，不用考虑使用情况。
$a  = 1;
$b  = 2;
$c  = '$a';
$c2 = <<<TEM
123
346
TEM;
echo $c;
//echo $c2;
$d = true;

function myTest()
{
    global $a, $b;
    $b = $a + $b;
}

myTest();
//echo $b;

// 常量在定义后，默认是全局变量
define("GREETING", "123");


// 类常量
class A {
    const TEMP = "a"; // 默认public，外界可访问
    private const TEMP2 = "b"; // 也可以加修饰符表示私有
}

//// 超全局变量
//$GLOBALS
//$_SERVER // 一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组
//$_REQUEST // 收集HTML表单提交的数据，同时包含get、ppst，file
//$_POST // post 数据
//$_GET // get 数据
//$_FILES // 上传文件
//$_ENV // 环境变量
//$_COOKIE // cookie
//$_SESSION // session
//
//// 魔术变量
//__LINE__  // 当前行
//__FILE__ // 当前文件
//__DIR__ // 当前目录
//__FUNCTION__ // 当前函数
//__CLASS__ // 当前类
//__METHOD__ // 当前方法
//__NAMESPACE__ // 当前命名空间