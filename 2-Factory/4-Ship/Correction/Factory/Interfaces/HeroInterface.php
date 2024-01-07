<?php

namespace App\Factory\Interfaces;

interface HeroInterface{
    public function receiveDamage(int $damage);
    public function getLife();
}