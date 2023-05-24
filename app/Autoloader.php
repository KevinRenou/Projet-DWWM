<?php

/**
 * Autoloader, permet de require automatiquement les classes
 */
Class Autoloader{

    /**
     * 
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }


    static function autoload($class) {
        if (file_exists('../app/controller/'.$class.'.php')) {
            require '../app/controller/'.$class.'.php';
        }
        if (file_exists('../app/model/'.$class.'.php')) {
            require '../app/model/'.$class.'.php';
        }
        if (file_exists('../app/helper/'.$class.'.php')) {
            require '../app/helper/'.$class.'.php';
        }
    }
}