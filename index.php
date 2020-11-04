<?php
require "./config.php";
$sql = 'SELECT * FROM HangHoa where SoLuongHang>0';
$result = $conn->query($sql);
echo $result->fetch_all()[0]['TenHH'];
