<?php


namespace App\Factory\Factories;

use App\Factory\Entities\AbstractBoat;
use App\Factory\Entities\BoatU;
use App\Factory\Interfaces\BoatFactoryInterface;

class BoatUFactory implements BoatFactoryInterface {


    public function createBoat(): AbstractBoat
    {
        return new BoatU;
    }
}