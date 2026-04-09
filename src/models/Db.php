<?php 

class Db {
    private static $instance; //representera la connexion a la bdd

    protected static function getInstance(){
        if (self::$instance == null) {
            try {
                self::$instance = new PDO("mysql:host=localhost:8889;dbname=poke", "root", "root");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\Throwable $e) {
                echo $e->getMessage(); // recupere et affiche le message d'erreur
                die; // met fin a tout autre code qui doit s'executer.
            }
        }
        return self::$instance;
    }

    protected static function disconnect(){
        self::$instance = null;
    }
}