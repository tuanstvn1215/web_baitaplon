<?php

use FFI\Exception;

class Admin extends Controller
{
    public $produce_img_cf;
    function __construct()
    {

        $config = $this->config();
        $this->produce_img_cf = $config->produce_img_cf();
        $Authenticate = $this->middleware('AuthenticateMiddleware');
        $Authenticate->requireEmployee();
    }
    function index()
    {
        header('Location: ' . host . '/admin/getAllOrder');
    }
    function getAllCustumer()
    {
        $CustumerModel = $this->model('CustumerModel');
        $Custumers = $CustumerModel->getAllCustumer();
    }
    function getAllEmployeeIndex()
    {
    }
    function getAllOrder()
    {
        $OrderModel = $this->model('OrderModel');
        $AllOrder = $OrderModel->getAllOrder();
        $this->view('admin', ['page' => 'AllOrder', 'AllOrder' => $AllOrder]);
    }
    function getAllProduce()
    {
        $ProduceModel = $this->model('ProduceModel');
        $Produces = $ProduceModel->getAllProduce();

        $ProduceCategoryModel = $this->model('ProduceCategoryModel');
        $ProduceCategorys = $ProduceCategoryModel->getAllCategory();
        for ($i = 0; $i < count($Produces); $i++) {
            foreach ($ProduceCategorys as $ProduceCategory) {
                if ($Produces[$i]['MaNhom'] == $ProduceCategory['MaNhom']) {
                    $Produces[$i]['TenNhom'] = $ProduceCategory['TenNhom'];
                }
            }
        }
        $this->view('admin', ['page' => 'AllProduce', 'Produce' => $Produces]);
    }
    function getAddProduce()
    {
        $ProduceCategoryModel = $this->model('ProduceCategoryModel');
        $ProduceCategorys = $ProduceCategoryModel->getAllCategory();
        $this->view('admin', ['page' => 'addProduce', 'ProduceCategorys' => $ProduceCategorys]);
    }
    function postAddProduce()
    {
        try {
            $_POST['MSHH'] = uniqid('', true);
            $FileType = pathinfo($_FILES["Hinh"]['name'], PATHINFO_EXTENSION);
            $upload_target = $this->produce_img_cf['upload_dir'] . '\\' . $_POST['MSHH'] . date('__Y_m_d_h_i_sa') . '.' . $FileType;
            $_POST['Hinh'] = $upload_target;
            $this->produce_img_cf['upload_dir'];
            if (!isset($_POST)) {
                throw 'không phải post';
            }
            if ($_FILES["Hinh"]['error'] != 0) {
                throw "Dữ liệu upload bị lỗi";
            }

            if (!in_array($FileType, $this->produce_img_cf['allowImgTypes'])) {
                throw 'Chỉ được upload các định dạng JPG, PNG, JPEG';
            }

            if ($_FILES["Hinh"]["size"] > $this->produce_img_cf['maxImgsizebyte']) {
                throw 'Không được upload ảnh lớn hơn ' . $this->produce_img_cf['maxImgsizeMB'] . ' MB.';
            }
            if (!move_uploaded_file($_FILES['Hinh']['tmp_name'], $upload_target)) {
                throw 'upload lưu thất bại';
            }
            echo 'đã lưu thành công hình ảnh ' . $upload_target;
            $ProduceModel = $this->model('ProduceModel');
            $arrMoTaHH = preg_split('/\,/', $_POST['MoTaHH']);
            $_POST['MoTaHH'] = json_encode($arrMoTaHH, JSON_UNESCAPED_UNICODE);
            var_dump(json_decode($_POST['MoTaHH'], true));
            if (!$ProduceModel->addProduce([$_POST['MSHH'], $_POST['TenHH'], $_POST['Gia'], $_POST['SoLuongHang'], $_POST['MaNhom'], $_POST['Hinh'], $_POST['MoTaHH']])) {
                unlink($upload_target);
                throw 'lưu thât bại';
            }
        } catch (Exception $ex) {
            echo $ex->getTraceAsString();
            echo $ex->getMessage();
        }
    }
    function detailsProduce($id)
    {
    }
    function deleteProduce($id)
    {
        $ProduceModel = $this->model('ProduceModel');
        $ProduceModel->deleteProduce($id);
        header('Location: ' . host . '/admin/getAllProduce');
    }

    function changeStageOder()
    {
    }
}
