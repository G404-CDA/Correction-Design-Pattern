<?php


namespace App\Factory\Factories;

use App\Factory\Entities\AbstractBoat;
use App\Factory\Interfaces\BoatFactoryInterface;
use App\Factory\Entities\BoatB;

class BoatBFactory implements BoatFactoryInterface {

    public function createBoat(): AbstractBoat
    {
        return new BoatB;
    }
}