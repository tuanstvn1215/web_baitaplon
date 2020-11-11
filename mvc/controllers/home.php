<?php
class Home extends Controller

{
    function index()
    {
        require_once('./mvc/views/test.php');
    }
    function sayhello($ho, $ten)
    {
        echo 'hello ' . $ho . ' ' . $ten;
    }
}
