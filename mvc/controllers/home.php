<?php
class Home extends Controller

{
    function index()
    {
        $produce = $this->model('ProduceModel');
        $AllProduce = $produce->getAllProduce();
        $produce->getAllProduce();
        $block = ['header', 'footer'];
        $index = $this->view('home', $data = ['page' => 'index', 'block' => $block, 'AllProduce' => $AllProduce]);
    }

    function addProduce()
    {
        $produce = $this->model('ProduceModel');
        $produce->addProduce($_POST);
    }
    function addEmployee()
    {
        print_r($_POST);
        $produce = $this->model('EmployeeModel');
        $produce->addEmployee($_POST);
    }
    function addCustomer()
    {
        print_r($_POST);
        $produce = $this->model('CustomerModel');
        $produce->addCustomer($_POST);
    }
    function addProduceCategory()
    {
        print_r($_POST);
        $produce = $this->model('ProduceCategoryModel');
        $produce->addCategory($_POST);
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
