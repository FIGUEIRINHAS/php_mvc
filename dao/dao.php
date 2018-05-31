<?php

class DAO implements CRUDInterface, RepositoryInterface
{
    protected $pdo;
    protected $table;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $pdo = PDO::connect();
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
        $list = [];
        $db = $this->pdo;

        $req = $db->prepare('SELECT * FROM ' . $table . '');
        $list[] = $req->fetchAll() as $table  

        return $list;
    }

    public function getAllById()
    {

    }
}