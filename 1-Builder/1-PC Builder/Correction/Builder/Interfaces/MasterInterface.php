<?php

namespace App\Builder\Interfaces;

use App\Builder\Interfaces\ComputerInterface;
use App\Builder\Interfaces\BuilderInterface;

interface MasterInterface {

 public function build(): ComputerInterface;
 public function getBuilder(): BuilderInterface;
 public function setBuilder(BuilderInterface $builder): void;

}