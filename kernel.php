<?php

include('controller/controller.php');
include('controller/user_controller.php');

class Kernel
{
    private static $_Instance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if(is_null(Self::$_Instance))
        {
            Self::$_Instance = new Kernel();
        }
        return Self::$_Instance;
    }

    public function main()
    {
        $router = new Router($_SERVER['REQUEST_URI']);

        $router->get('/', function(){ echo 'Acceuil'; });
        $router->get('/posts', function(){ echo 'Tous les posts'; });
        $router->get('/posts/:id', function($id){ echo 'Le post ' . $id; });
        $router->post('/posts/:id', function($id){ echo 'Poster pour l\'article'; });
        $router->get('/users', function() {echo 'Users';});

        $router->run();
    }
}