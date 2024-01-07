<?php

namespace App\Factory\Entities;

use App\Factory\Interfaces\HeroInterface;

abstract class AbstractBoat
{

    protected $damage;
    protected $description;

     
    public function sendDamage(HeroInterface $heroShip)
    {
        $heroShip->receiveDamage($this->getDamage());
        return $heroShip->getLife();
    }

    public function getDamage(){
        return $this->damage;
    }
    public function getDescription(){
        return $this->description;
    }

}