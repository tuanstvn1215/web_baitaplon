<?php
class Details extends Controller
{
    function Index($MSHH)
    {
        $DetailsModel = $this->model('ProduceModel');

        $Details = $DetailsModel->get($MSHH);

        $DetailsView = $this->view('Details');
    }
    function postCreateOrder()
    {
        print_r($_POST);
        $produce = $this->model('Order');
        $produce->addProduce($_POST);
    }
}
