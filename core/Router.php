
<?php

class Router {
    public function start (){
        try {
            $controller = new MainController();
            $controller->index();
        } catch (\Throwable $e) {
        echo $e->getMessage();
        }
    }
}