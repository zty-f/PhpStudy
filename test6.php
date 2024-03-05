<?php

$x = ["111","234"];
echo  $x[1];

//echo phpinfo();

$servername = "localhost";
$username = "root";
$password = "123456";
// 面向对象
// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";
$conn->close();

// 面向过程
// 创建连接
$conn = mysqli_connect($servername, $username, $password);

// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "连接成功";
mysqli_close($conn);


// POD
try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    echo "连接成功";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
$conn = null;
