<?php

class Admin extends Controller
{
    public $produce_img_cf;
    function __construct()
    {

        $config = $this->config();
        $produce_img_cf = $config->produce_img_cf();
        $Authenticate = $this->middleware('AuthenticateMiddleware');
        $Authenticate->requireEmployee();
    }

    function getCustumerIndex()
    {
    }
    function getEmployeeIndex()
    {
    }
    function getAllOrder()
    {
    }
    function getAddProduce()
    {
        $ProduceCategoryModel = $this->model('ProduceCategoryModel');
        $ProduceCategorys = $ProduceCategoryModel->getAllCategory();
        $ProduceCategoryView = $this->view('testadminaddproduce', $data = ['ProduceCategorys' => $ProduceCategorys]);
    }
    function postAddProduce()
    {
        if (!isset($_POST)) {
            throw 'không phải post';
            die;
        }
        if ($_FILES["Hinh"]['error'] != 0) {
            var_dump($_FILES["Hinh"]['error']);
            echo "Dữ liệu upload bị lỗi";
            die;
        }
        $FileType = pathinfo($_FILES["Hinh"]['name'], PATHINFO_EXTENSION);
        $allowImgTypes    = array('jpg', 'png', 'jpeg');
        if (!in_array($FileType, $this->produce_img_cf['allowImgTypes'])) {
            echo 'Chỉ được upload các định dạng JPG, PNG, JPEG';
            die;
        }

        if ($_FILES["Hinh"]["size"] > $this->produce_img_cf['maxImgsizebyte']) {
            echo 'Không được upload ảnh lớn hơn ' . $this->produce_img_cf['maxImgsizeMB'] . ' MB.';
            die;
        }

        $this->model('Produce');
        var_dump($_FILES['Hinh']);
        printf('f   ');
        print_r($_POST);
    }
    function changeStageOder()
    {
    }
}
