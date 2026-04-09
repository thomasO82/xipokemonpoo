
<?php

class Router
{
    public function start()
    {
        try {
            $uri = $_SERVER["REQUEST_URI"];
            if ($uri !== "/") {
                $controller = ucfirst(explode("/", $uri)[1]) . "Controller";
                if (class_exists($controller)) {
                    $instance = new $controller();
                    $instance->index();
                }else{
                    throw new Exception("404");
                }
            } else {
                $controller = new MainController();
                $controller->index();
            }
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }
}
