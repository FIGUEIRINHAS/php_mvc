<?php

interface RepositoryInterface
{
    private $id;
    private $array;


    public function getAll($array);

    public function getAllById($associatif_array);
}