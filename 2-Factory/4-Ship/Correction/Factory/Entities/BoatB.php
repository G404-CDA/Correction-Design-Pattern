<?php
namespace App\Factory\Entities;

use App\Factory\Interfaces\HeroInterface;
use App\Factory\Entities\AbstractBoat;



class BoatB extends AbstractBoat {

    protected $damage = 40; 
    protected $description = 'a big ufo enemy ship';

}