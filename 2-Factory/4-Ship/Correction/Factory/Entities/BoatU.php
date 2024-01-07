<?php

namespace App\Factory\Entities;

use App\Factory\Interfaces\HeroInterface;
use App\Factory\Entities\AbstractBoat;

class BoatU  extends AbstractBoat {

    protected $damage = 30;
    protected $description = 'a big ufo enemy ship';
 
}