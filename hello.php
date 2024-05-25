<?php
echo "你好，world!" . "<br>";
$name = "张小帅";
echo "hello " . $name . "<br>";
$age = 22;
echo $age . "<br>";
// 动态类型
$name = $age;
echo $name . "<br>";
echo $age . "<br>";
$age = $age + 10;
// 值传递
echo $age . "<br>";
echo $name . "<br>";
