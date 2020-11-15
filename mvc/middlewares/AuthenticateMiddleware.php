<?php
class AuthenticateMiddleware extends Middleware
{
    function Login()
    {
        if (isset($_SESSION['MSKH']) || isset($_SESSION['MSNV'])) {
            header('Location: ' . host . '/home/index');
        }
    }
    function Admin()
    {
        if (!isset($_SESSION['MSNV'])) {
            header('Location: ' . host . '/home/index');
        }
    }
}
