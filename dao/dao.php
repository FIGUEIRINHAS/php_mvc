<?php

class DAO implements CRUDInterface, RepositoryInterface
{
    protected $pdo;
    protected $table;

    public function __construct($pdo, $table)
    {
        $this->pdo = $pdo;
        $this->table = $table;

        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $pdo = new PDO('myqsl:host=localhost; dbname=php_mvc_framework', 'root', 'root');
    }

    public function create()
    {

    }

    public function read()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function getAll($table)
    {
        $db = $this->pdo;
        $req = $db->prepare('SELECT * FROM ' . $table . '');
        $req->fetchAll() as $table  
    }

    public function getAllById()
    {

    }
}