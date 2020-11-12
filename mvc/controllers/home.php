<?php
class Home extends Controller

{
    function index()
    {
        $produce = $this->model('ProduceModel');
        $AllProduce = $produce->getAllProduce();
        $produce->getAllProduce();
        $index = $this->view('home', $data = ['page', 'index', 'AllProduce' => $AllProduce]);
    }
    function sayhello($ho, $ten)
    {
        echo 'hello ' . $ho . ' ' . $ten;
    }
    function add()
    {
        print_r($_POST);
        $produce = $this->model('ProduceModel');
        $produce->addProduce($_POST);
    }
}
