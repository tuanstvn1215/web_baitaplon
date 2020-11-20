<?php
class Login extends Controller
{

    function __construct()
    {
        $Authenticate = $this->middleware('AuthenticateMiddleware');
        $Authenticate->requireLogin();
    }
    function index()
    {
        $index = $this->view('login', $data = 'index');
    }
    function SignUp()
    {

        $index = $this->view('login', $data = 'signup');
    }
    function postLogin()
    {

        $index = $this->view('login', $data = 'index');
        $CustomerModel = $this->model('CustomerModel');

        $Customer = $CustomerModel->getCustomer($_POST['MSKH']);
        if (isset($Customer['MSKH'])) {
            if ($_POST['MatKhau'] == $Customer['MatKhau']) {
                $_SESSION['MSKH'] = $_POST['MatKhau'];
                echo 'dang nhap thanh cong';
                header('Location: /B1704786/home/index');
            } else {
                echo 'dang nhap that bai';
            }
        } else {
            echo 'khong co tai khoan';
        }
    }
    function postSignUp()
    {

        $Custumer = $this->model('CustomerModel');
        $data[0] = $_POST['MSKH'];
        $data[1] = $_POST['HoTenKH'];
        $data[3] = $_POST['Email'];
        $data[4] = null;
        $data[5] = $_POST['SoDienThoai'];
        $data[6] = $_POST['MatKhau'];
        echo $Custumer->addCustomer($data);
    }
}
