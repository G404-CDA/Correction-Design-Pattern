<?php

namespace App\Factory\Entities;

use App\Factory\Interfaces\HeroInterface;
use App\Factory\Entities\AbstractBoat;

class BoatR  extends AbstractBoat {
    
    protected $damage = 20;
    protected $description = 'a rocket enemy ship';

}