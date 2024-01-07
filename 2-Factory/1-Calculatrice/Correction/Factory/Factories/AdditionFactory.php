<?php

namespace App\Factory\Factories;


use App\Factory\Entities\AdditionCalculation;
use App\Factory\Interfaces\InterfaceOperationFactory;
use App\Factory\Interfaces\InterfaceCalculation;



class AdditionFactory implements InterfaceOperationFactory {
    


    public function createCalculation($a,$b):InterfaceCalculation
    {
        return new AdditionCalculation($a,$b);
    }
}