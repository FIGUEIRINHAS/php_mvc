<?php
        spl_autoload_register(function($class) 
        {
            if(file_exists('./common/'.$class.'.php')):
                include'./common/'.$class.'.php';
            elseif(file_exists('./entity/'.$class.'.php')):
                include'./entity/'.$class.'.php';
            elseif(file_exists('./controller/'.$class.'.php')):
                include'./controller/'.$class.'.php';
            elseif(file_exists('./dao/'.$class.'.php')):
                include'./dao/'.$class.'.php';
            endif;
            //echo 'CLASS : '; var_dump($class); echo '</br>';
        });