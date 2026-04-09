<?php 

class FreeController extends Controller {
    function index (){
       if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['id'])) {
            Pokemon::freePoke($_POST['id']);
        }
       }
       header('Location: /');
    }
}