<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("連接資料庫失敗: " . $conn->connect_error);
}

$username = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['password']);


$sql = "INSERT INTO users (username, hashed_password, salt) VALUES ('$username', '$hashedPassword', '$salt')";

if ($conn->query($sql) === TRUE) {
    echo "註冊成功<br>";
    echo '<button onclick="window.location.href=\'loginWeb.php\'">前往登入頁面</button>';
} else {
    echo "註冊失敗: " . $conn->error;
}

$conn->close();
?>