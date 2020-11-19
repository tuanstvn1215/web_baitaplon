<?php
class AuthenticateMiddleware extends Middleware
{
    function requireLogin()
    {
        if (isset($_SESSION['MSKH']) || isset($_SESSION['MSNV'])) {
            header('Location: ' . host . '/home/index');
        }
    }
    function requireEmployee()
    {
        // if (!isset($_SESSION['MSNV'])) {
        //     header('Location: ' . host . '/home/index');
        // }
    }
}
