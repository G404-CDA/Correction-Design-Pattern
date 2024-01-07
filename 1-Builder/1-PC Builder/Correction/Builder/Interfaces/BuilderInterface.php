<?php

namespace App\Builder\Interfaces;
use App\Builder\Interfaces\ComputerInterface;


interface BuilderInterface {
    public function getComputer() : ComputerInterface;
    public function setPart(PartInterface $components) : self;
}