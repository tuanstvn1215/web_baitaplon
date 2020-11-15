<?php
class Controller
{   //Model

    function __construct()
    {
        require_once('./mvc/config/host.php');
    }
    public function model($model)
    {
        require_once('./mvc/models/' . $model . '.php');
        return new $model;
    }
    //View
    public function view($view, $data = [])
    {
        require_once('./mvc/views/' . $view . '.php');
        return new $view;
    }
    public function middleware($middleware)
    {
        require_once('./mvc/middlewares/' . $middleware . '.php');
        return new $middleware;
    }
}
