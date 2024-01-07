<?php
namespace App\Factory\Entities;

use App\Factory\Interfaces\InterfaceCalculation;

class AdditionCalculation implements InterfaceCalculation {

    protected $number1;
    protected $number2;

    public function __construct($a ,$b){
        $this->number1 = $a;
        $this->number2 = $b;
    }
    public function calculationType(){
        return  $this->number1 + $this->number2 ;
    }

}