<?php
require './config.php';
$HangHoa;
try {
    $statment = $conn->prepare('SELECT * FROM HangHoa WHERE MSHH = ?');
    $statment->bind_param('s', $_GET['MSHH']);
    $statment->execute();
    $HangHoa = $statment->get_result();
    $HangHoa->fetch_assoc();
} catch (Exception $e) {
    $e->getMessage();
}
