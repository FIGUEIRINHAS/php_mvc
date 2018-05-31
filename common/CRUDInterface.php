<?php

interface CRUDinterface
{
    public function create($asso_array);

    public function retrieve($id, $entity);
    
    public function update($id, $entity);

    public function delete($id, $entity);
} 