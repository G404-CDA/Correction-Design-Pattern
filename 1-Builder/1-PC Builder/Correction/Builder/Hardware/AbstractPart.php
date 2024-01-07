<?php

namespace App\Builder\Hardware;

use App\Builder\Interfaces\PartInterface;

abstract class AbstractPart implements PartInterface
{

    protected string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue() :string
    {
        return $this->value;
    }

}