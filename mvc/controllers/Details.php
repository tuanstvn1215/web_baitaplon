<?php
class Details extends Controller
{
    function index($MSHH)
    {
        $DetailsModel = $this->model('ProduceModel');
        $Details = $DetailsModel->get($MSHH);

        $DetailsView = $this->view();
    }
}
