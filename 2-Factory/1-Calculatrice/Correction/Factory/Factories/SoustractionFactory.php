<?php


namespace App\Factory\Factories;

use App\Factory\Entities\SoustractionCalculation;
use App\Factory\Interfaces\InterfaceCalculation;
use App\Factory\Interfaces\InterfaceOperationFactory;

class SoustractionFactory implements InterfaceOperationFactory {
    
    public function createCalculation($a,$b):InterfaceCalculation
    {
        return new SoustractionCalculation($a,$b);
    }

}