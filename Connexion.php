<?php

class Connexion
{

    public static function connect()
    {
        $config = file_get_contents('config/database.json');
        $decode = json_decode($config, true);

        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $pdo = new PDO('mysql:host=' . $decode['host'] . '; dbname=' . $decode['dbname'] , $decode['username'] ,$decode['password'], $pdo_options);
        
        return($pdo);
    } 
}