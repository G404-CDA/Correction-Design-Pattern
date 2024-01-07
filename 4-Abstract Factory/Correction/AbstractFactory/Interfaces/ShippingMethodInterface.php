<?php

namespace App\AbstractFactory\Interfaces;

use App\AbstractFactory\Interfaces\ProductInterface;


interface ShippingMethodInterface {

    public function getName(): string;
    public function getCostEstimate($miles, ProductInterface $product): string;
    
}