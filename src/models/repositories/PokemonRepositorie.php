<?php

abstract class PokemonRepositorie extends Db
{

    private static function request($request)
    {
        $result = self::getInstance()->query($request);
        return $result;
    }

    public static function getRandomPoke()
    {
        $sql = "SELECT * FROM pokemon WHERE isCaptured = 0 ORDER BY RAND() LIMIT 1";
        $result = self::request($sql)->fetch();
        return new Pokemon($result['name'], $result['isCaptured'], $result['id']);
    }

    public static function capturePoke(int $id)
    {
        $sql = "UPDATE pokemon SET isCaptured = 1 WHERE id = '$id'";
        return self::request($sql)->fetch();
    }

    public static function getCapturedPokemon()
    {
        $sql = "SELECT * from pokemon WHERE isCaptured = 1";
        $result = self::request($sql)->fetchAll(PDO::FETCH_ASSOC);
        $tabPoke = [];
        foreach ($result as $poke) {
            array_push($tabPoke, new Pokemon($poke["name"], $poke["isCaptured"], $poke['id']));
        }
        return $tabPoke;
    }

    public static function freePoke($id)
    {
        $sql = "UPDATE pokemon SET isCaptured = 0 WHERE id = '$id'";
        return self::request($sql)->fetch();
    }
}
