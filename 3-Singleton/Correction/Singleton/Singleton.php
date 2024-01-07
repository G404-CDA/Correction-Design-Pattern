<?php

namespace App\Singleton;


class Singleton {
    private static $_instance = null;

    
    public static function getInstance(): self
    {

        if (self::$_instance == null) {
            self::$_instance =  new Singleton;
        }   
        return self::$_instance;
    }


}