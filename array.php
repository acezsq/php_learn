<?php
$arr = array("bob","jack","zack");
echo $arr[1] . "<br>";
echo "------------" . "<br>";
var_dump($arr);
echo "<br>";
echo "------------" . "<br>";
// 遍历数组方式一
for($i=0; $i<count($arr); $i++) {
    echo $arr[$i] . "<br>";
}
echo "------------" . "<br>";
// 遍历数组方式二
foreach ($arr as $x => $x_value) {
    echo "key-" . $x . " value=" . $x_value . "<br>";
}
echo "------------" . "<br>";
// 关联数组
$age = array("bob" => 15, "jack" => 20, "zack" => 30);
foreach ($age as $x => $x_value) {
    echo "key-" . $x . " value=" . $x_value . "<br>";
}
echo "bob的年龄是:" . $age["bob"] . "<br>";
echo "------------" . "<br>";
// 数组中可以存储不同类型的变量数据
$test = array(1, "zsq");
var_dump($test);