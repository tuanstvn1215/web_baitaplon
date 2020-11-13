<?php
class Home extends Controller
{
    function getLogin()
    {
        $index = $this->view('login', $data = 'index');
    }
    function getSignUp()
    {
        $index = $this->view('login', $data = 'signup');
    }
    function postLogin()
    {
        $index = $this->view('login', $data = 'index');
    }
    function postSignUp()
    {
        $index = $this->view('login', $data = 'signup');
    }
}
