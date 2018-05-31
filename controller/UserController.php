<?php

class UserController
{
    public function getAllUser()
    {
        header('Content-type: application/json');

        $user = new DAOUser();
        $list = $user->getAll("user");
        
        echo json_encode($list);
    }
}