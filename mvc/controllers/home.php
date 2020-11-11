<?php
class Home extends Controller

{
    function index()
    {
        $produce = $this->model('ProduceModel');
        $AllProduce = $produce->getAllProduce();
        $index = $this->view('home', $data = ['page', 'index', 'AllProduce' => $AllProduce]);
    }
    function sayhello($ho, $ten)
    {
        echo 'hello ' . $ho . ' ' . $ten;
    }
}
