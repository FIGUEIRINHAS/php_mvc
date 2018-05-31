<?php

require_once('Connexion.php');

class DAO implements CRUDInterface, RepositoryInterface
{

    public function __construct()
    {
        $this->pdo = Connexion::connect();
    }

    public function create($asso_array)
    {

    }

    public function retrieve($id, $entity)
    {

    }

    public function update($id, $entity)
    {

    }

    public function delete($id, $entity)
    {

    }

    public function getAll($table)
    {
        $list = [];
        $db = $this->pdo;

        $req = $db->query('SELECT * FROM ' . $table . '');
        $list[] = $req->fetchAll();  

        return $list;
    }

    public function getAllBy($asso_array)
    {

    }
}