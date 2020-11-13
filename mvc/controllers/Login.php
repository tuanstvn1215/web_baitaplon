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
        $Custumer = $this->model('CustumerModel');
        $Custumer->addCustomer();
    }
}
