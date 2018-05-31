<?php

interface CRUDinterface
{
    private $id;


    public function create($asso_array)
    {
        //return $entity;
    }
    public function retrieve($id, $entity):
    {
        //return $entity;
    }
    public function update($id, $entity);
    {
        /*if (true)
        *{
        *    return true;
        *}
        return false;*/
    }

    public function delete($id, $entity);
    {
        /*if (true)
        *{
        *    return true;
        *}
        return false;*/
    }
} 