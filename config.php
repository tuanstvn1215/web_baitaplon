
<?php

$db_servername = "localhost";
$db_username = "B1704786";
$db_password = "B1704786";
$db_name = "web";
// Tạo kết nối
$conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
$conn->set_charset("utf8");
// Kiểm tra kết nối
if ($conn->connect_error) {
  echo $conn->connect_error;
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "kết nối thành công";
}
