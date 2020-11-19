<?php
class Controller
{   //Model

    public function __construct()
    {
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
    }
    public function middleware($middleware)
    {
        require_once('./mvc/middlewares/' . $middleware . '.php');
        return new $middleware;
    }
    public function config()
    {
        require_once('./mvc/config/config.php');
        return new Config();
    }
}
