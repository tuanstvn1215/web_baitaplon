<?php
class Login extends Controller
{
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
    }
    function postSignUp()
    {
        $Custumer = $this->model('CustomerModel');
        $data[0] = $_POST['MSKH'];
        $data[1] = $_POST['HoTenKH'];
        $data[2] = $_POST['DiaChi'];
        $data[3] = $_POST['SoDienThoai'];
        $data[4] = $_POST['MatKhau'];
        echo $data;
        echo $Custumer->addCustomer($data);
    }
}
