<?php
date_default_timezone_set("Asia/Shanghai");
$t = date("H");
echo "$t\n";
if ($t < "20") {
    echo "Have a good day!";
}

echo "</br>";

$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".
";

$cars=array("Volvo","BMW","Toyota");
sort($cars);
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".
";

function add($x,$y)
{
    $total=$x+$y;
    return $total;
}

echo "1 + 16 = " . add(1,16);
