<?php
require "config.php";
try {
    $statment = $conn->prepare("insert into `HangHoa`(MSHH, TenHH, Gia, SoLuongHang, MaNhom, Hinh, MoTaHH) values (?,?,?,?,?,?,?)");
    $statment->bind_param("ssiisss", $MSHH, $TenHH, $Gia, $SoluongHang, $MaNhom, $Hinh, $MoTaHH);
    $MSHH = $_POST['MSHH'];
    $TenHH = $_POST['TenHH'];
    $Gia = $_POST['Gia'];
    $SoluongHang = $_POST['SoluongHang'];
    $MaNhom = $_POST['MaNhom'];
    $Hinh = $_POST['Hinh'];
    $MoTaHH = $_POST['MoTaHH'];
    $statment->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}
