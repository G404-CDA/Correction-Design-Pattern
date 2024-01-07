<?php

namespace App\Factory\Factories;


use App\Factory\Entities\MultiplicationCalculation;
use App\Factory\Interfaces\InterfaceOperationFactory;
use App\Factory\Interfaces\InterfaceCalculation;



class MultiplicationFactory implements InterfaceOperationFactory {
    


    public function createCalculation($a,$b):InterfaceCalculation
    {
        return new MultiplicationCalculation($a,$b);
    }
} 
