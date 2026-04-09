<?php

class MainController extends Controller
{

    public function index()
    {
        $pokerandom = Pokemon::getRandomPoke();
        $pokemonCaptured = Pokemon::getCapturedPokemon();

    
        require_once "../views/mainViews.php";
    }
}
