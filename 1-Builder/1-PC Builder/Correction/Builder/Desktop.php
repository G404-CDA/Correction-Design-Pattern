<?php

namespace App\Builder;

use App\Builder\Interfaces\ComputerInterface;
use App\Builder\Interfaces\PartInterface;

class Desktop implements ComputerInterface
{

    /**
     * @var PartInterface[]
     */
    private array $components;

    public function __construct(array $components)
    {
        $this->components = $components;
    }

    /**
     * @param string $namespace
     * @return PartInterface
     * @throws \Exception
     */
    public function getComponent(string $namespace):PartInterface
    {
        foreach ($this->components as $component) {
            if ($component instanceof $namespace) {
                return $component;
            }
        }
        throw new \Exception("Component not found");
    }
}