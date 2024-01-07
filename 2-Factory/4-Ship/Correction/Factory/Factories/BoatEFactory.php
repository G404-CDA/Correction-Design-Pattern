<?php


namespace App\Factory\Factories;

use App\Factory\Entities\AbstractBoat;
use App\Factory\Interfaces\BoatFactoryInterface;
use App\Factory\Entities\BoatE;

class BoatEFactory implements BoatFactoryInterface {

    public function createBoat(): AbstractBoat
    {
        return new BoatE;
    }
    
}