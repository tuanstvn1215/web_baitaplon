<?php
class Home extends Controller

{
    function index()
    {
        $user = null;
        $produce = $this->model('ProduceModel');
        $AllProduce = $produce->getAllProduce();
        $produce->getAllProduce();

        if (isset($_SESSION['MSKH'])) {
            $CustomerModel = $this->model('CustomerModel');
            $user = $CustomerModel->getCustumer($_SESSION['MSKH']);
        }

        if (isset($_SESSION['MSNV'])) {
            $EmployeeModel = $this->model('EmployeeModel');
            $user = $EmployeeModel->getEmployee($_SESSION['MSNV']);
        }

        $index = $this->view('home', ['page' => 'index', 'AllProduce' => $AllProduce, 'user' => $user]);
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
    function details($ProduceId)
    {
        $produceModel = $this->model('ProduceModel');
        $produce = $produceModel->getProduce($ProduceId);
        $Produceview = $this->view('home', ['page' => 'details', 'Produce' => $produce]);
    }
    function postLogout()
    {
        session_destroy();
        header('Location: ' . host . '/home/index');
    }


    function test()
    {
        var_dump($_POST['test']);
    }
}
