<?php

$conn = new mysqli("localhost", "root", "dungtnhp122", "my_website");

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM users
        WHERE username = '$username'
        AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Đăng nhập thành công!";
} else {
    echo "Sai tài khoản hoặc mật khẩu!";
}

$conn->close();

?>