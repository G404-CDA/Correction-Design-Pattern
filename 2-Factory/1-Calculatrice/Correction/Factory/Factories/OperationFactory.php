<?php

namespace App\Factory\Factories;

use App\Factory\Factories\AdditionFactory;
use App\Factory\Factories\SoustractionFactory;
use App\Factory\Factories\MultiplicationFactory;
use App\Factory\Interfaces\InterfaceOperationFactory;
use Exception;

class OperationFactory {

    protected $type;

    public function __construct(string $type){
        $this->type = $type;
    }
    
    public function createFactory():InterfaceOperationFactory
    {
        $factoryName = "App\\Factory\\Factories\\" .ucfirst(strtolower($this->type))."Factory";
        if (!class_exists($factoryName)) {
            // return new Exception("Class not found", 404);
            throw new Exception("Sorry, i can't do this ! ", 404);
        }
        return new $factoryName;
    }

} 