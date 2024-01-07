<?php

namespace App\Factory\Factories;

use App\Factory\Interfaces\BoatFactoryInterface;
use Exception;

class DirectorBoatFactory{

    protected $type;


    public function __construct($type){ 
        $this->type = ucfirst($type);
    }

    public function createFactory() :BoatFactoryInterface
    {
        

        $factoryName = "App\\Factory\\Factories\\Boat" .ucfirst($this->type)."Factory";
        if (!class_exists($factoryName)) {
            throw new Exception("Sorry, i can't do this ! ", 404);
        }
        return new $factoryName;
   
        // switch ($this->type) {
        //     case 'U':
        //         return new BoatUFactory;
        //     case 'R':
        //         return new BoatRFactory;  
        //     case 'B':
        //         return new BoatBFactory;  
        //     case 'E':
        //         return new BoatEFactory;  
        //     default:
        //         throw new Exception("Aucun navire de ce type", 404);
        // }

    }
}