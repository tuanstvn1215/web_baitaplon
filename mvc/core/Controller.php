<?php
class Controller
{   //Model

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
}
