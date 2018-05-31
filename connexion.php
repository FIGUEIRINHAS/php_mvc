<?php

class PDO
{

    public function connect()
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $pdo = new PDO('myqsl:host=localhost; dbname=php_mvc_framework', 'root', 'root');
    }
    
}