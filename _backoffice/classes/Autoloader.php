<?php 

class Autoloader {

    /**
     * Ajout de l'autoloader
     */
    static function register(){
        spl_autoload_register(function($class){
            include_once 'classes/'.$class.'.php';
        });
    }
}

