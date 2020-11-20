<?php
class Home extends Controller

{
    function index()
    {
        $produce = $this->model('ProduceModel');
        $AllProduce = $produce->getAllProduce();
        $produce->getAllProduce();
        $block = ['header', 'footer'];
        $index = $this->view('home', ['page' => 'index', 'block' => $block, 'AllProduce' => $AllProduce]);
    }

    function addOrderDetail()
    {
        print_r($_POST);
        $produce = $this->model('OrderDetailModel');
        $produce->addOrderDetail($_POST);
    }
    function set()
    {
        $produce = $this->model('ProduceModel');
        $produce->setProduce($_POST);
    }
}
