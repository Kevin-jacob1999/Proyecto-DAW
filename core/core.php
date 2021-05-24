<?php
    class Core{
        public function __construct(){

            $url = $_GET['url'];
            $urlArray = explode('/',$url);
            $controller = array_key_exists(0, $urlArray)?$urlArray[0]:"";
            $method = array_key_exists(1, $urlArray)?$urlArray[1]:"";

            $urlController = 'controllers/'.$controller.'.php';

            if(file_exists($urlController))
            {
                require_once $urlController;
                $controlador = new $controller();
                $controlador->loadModel($controller);
                if(method_exists($controller,$method))
                {
                    $controlador->$method();
                }
            }
        }
    }
?>