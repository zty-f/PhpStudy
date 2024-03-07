<?php
echo date("Y/m/d") . "</br>";
echo date("Y.m.d") . "</br>";
echo date("Y-m-d");


echo <<<EOF
        <h1>我的第一个标题</h1>
        <p>我的第一个段落。</p>
EOF;
// 结束需要独立一行且前后不能空格


// 设置时区
date_default_timezone_set("PRC");

// 打印当前时间  PHP_EOL 换行符，兼容不同系统
echo date("Y-m-d H:i:s")  . PHP_EOL;
echo date("Y 年 m 月 d 日 H 点 i 分 s 秒")  . PHP_EOL;
// 指定时间
$time = strtotime("2018-01-18 08:08:08");  // 将指定日期转成时间戳
echo date("Y-m-d H:i:s", $time)  . PHP_EOL;
