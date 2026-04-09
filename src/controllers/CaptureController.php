<?php 

class CaptureController extends Controller {
    function index (){
       if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['id'])) {
            Pokemon::capturePoke($_POST['id']);
        }
       }
       header('Location: /');
    }
}