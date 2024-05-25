<?php
// 无参数无返回值
function func1() {
    echo "hello zack!" . "<br>";
}
func1();

// 有参数无返回值
function func2($name) {
    echo "hello " . $name . "<br>";
}
func2("zsq");

// 有参数有返回值
function add($x, $y) {
    return $x + $y;
}
echo "6 + 1 = " . add(6, 1) . "<br>";
