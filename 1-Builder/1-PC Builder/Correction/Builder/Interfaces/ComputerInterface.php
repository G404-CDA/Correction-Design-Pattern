<?php 

namespace App\Builder\Interfaces;

use App\Builder\Interfaces\PartInterface;

interface ComputerInterface {
    public function getComponent(string $namspace): PartInterface;
}