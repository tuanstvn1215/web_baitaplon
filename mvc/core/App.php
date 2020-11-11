<?php
class App
{
    //http/./$controller/$action/$params
    private $controller = 'home';
    private $action = 'index';
    private $params = [];
    function __construct()
    {
        $arrUrl = $this->UrlProcess();
        // xử lý và thêm controller
        if (file_exists('./mvc/controllers/' . $arrUrl[0] . '.php')) {
            $this->controller = $arrUrl[0];
            unset($arrUrl[0]);
        }

        require_once './mvc/controllers/' . $this->controller . '.php';

        //xử lý action
        if (isset($arrUrl[1])) {

            if (method_exists($this->controller, $arrUrl[1])) {
                $this->action = $arrUrl[1];
                unset($arrUrl[1]);

                //xử lý params---------------
                $this->params = array_values($arrUrl);
                print_r($arrUrl);
            }
        }
        try {
            call_user_func_array([$this->controller, $this->action], $this->params);
        } catch (Throwable $e) {
            require_once './mvc/controllers/home.php';
            call_user_func_array(['home', 'index'], []);
        }
    }

    //xử lý url thành mảng arrUrl
    //http/./$controller/$action/$params => arrUrl[0]->'controller',arrUrl[1]->'action',arrUrl[2]->'params'
    function UrlProcess()
    {
        $arrUrl = ['0'];

        if (isset($_GET['url'])) {
            $arrUrl = explode('/', filter_var(trim($_GET['url'], '/')));
        }
        return  $arrUrl;
    }
}
