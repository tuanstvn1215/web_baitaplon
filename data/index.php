<?php
require "./config.php";
$sql = 'SELECT * FROM HangHoa where SoLuongHang>0';
$result = $conn->query($sql);
$hanghoa = $result->fetch_all(MYSQLI_ASSOC);

require './view/index.php';
