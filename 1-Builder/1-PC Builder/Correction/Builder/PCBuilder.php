<?php



namespace App\Builder;

use App\Builder\Interfaces\BuilderInterface;
use App\Builder\Interfaces\ComputerInterface;
use App\Builder\Desktop;
use App\Builder\Interfaces\PartInterface;

class PCBuilder implements BuilderInterface 
{
    private $components = [];


    public function getComputer(): ComputerInterface
    {
        return new Desktop($this->components);
    }

    public function setPart(PartInterface $component): BuilderInterface
    {
        $this->components[] = $component;
        return $this;
    }
}