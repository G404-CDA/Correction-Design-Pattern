<?php

namespace App\Factory\Entities;
use App\Factory\Interfaces\HeroInterface;
use App\Factory\Entities\AbstractBoat;

class BoatE  extends AbstractBoat{

    protected $damage = 10; 
    protected $description = 'an enemy ship';

}