
<?php 

require_once "../core/Router.php";
require_once "../src/models/Db.php";

//modeles
require_once "../src/models/Pokemon.php";

//controller 
require_once "../src/controllers/MainController.php";



$router = new Router();
$router->start();