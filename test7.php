<?php
class Mystatic {
    public static $staticvalue = 'zhangsan';
    public static function staticMethod() {
        $a = 'hello';
        return $a;
    }
}
$obj = new Mystatic();
echo '$staticvalue: '.$obj::$staticvalue.PHP_EOL;
echo '$staticvalue: '.Mystatic::$staticvalue.PHP_EOL;
echo '$a: '.$obj::staticMethod().PHP_EOL;
echo '$a: '.$obj->staticMethod().PHP_EOL;