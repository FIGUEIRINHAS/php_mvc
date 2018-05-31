<?php

interface CRUDinterface
{
    private $id;


    public function create();

    public function retrieve($id, $entity):

    public function update($id, $entity);

    public function delete($id, $entity);
} 