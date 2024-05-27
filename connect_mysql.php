<?php
$servername = "127.0.0.1"; // 或者使用主机 IP 地址
$port = "3306";
$username = "root";
$password = "123456";
$dbname = "students";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// 检查连接
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 示例：执行插入操作
$name = "John Doe";
$age = 30;

$sql = "INSERT INTO age (name, age) VALUES ('$name', $age)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully \n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// 示例：执行删除操作
$id_to_delete = 1; // 要删除的记录的id

$sql = "DELETE FROM age WHERE id = $id_to_delete";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully \n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$name = "Zack";
$age = 24;

$sql = "INSERT INTO age (name, age) VALUES ('$name', $age)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully \n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// 示例：执行更新操作
$id_to_update = 2; // 要更新的记录的id
$new_age = 35;

$sql = "UPDATE age SET age = $new_age WHERE id = $id_to_update";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully \n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
