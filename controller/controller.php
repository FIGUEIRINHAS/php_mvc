<?php

class Controller
{
    public function view(String $dir = null, String $action)
    {
        include ('./view/layout/header.php');

        if($dir)
        {
            if(file_exists('./view/' . $dir . '/' . $action . '.php'))
            {
                include('./view' . $dir . '/' . $action . '.php');
            }
        }
        if(file_exists('./view/' . $action . '.php'))
        {
            include('./view' . $action . '.php');
        }

        include ('./view/layout/footer.php');
    }
}