
<?php 

require_once "../core/Router.php";
require_once "../src/models/Db.php";

//repositories
require_once "../src/models/repositories/PokemonRepositorie.php";

//modeles
require_once "../src/models/Pokemon.php";

//controller 
require_once "../src/controllers/Controller.php";
require_once "../src/controllers/MainController.php";
require_once "../src/controllers/CaptureController.php";
require_once "../src/controllers/FreeController.php";



$router = new Router();
$router->start();