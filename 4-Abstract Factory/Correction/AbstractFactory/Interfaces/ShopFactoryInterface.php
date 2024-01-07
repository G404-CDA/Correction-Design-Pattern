<?php

namespace App\AbstractFactory\Interfaces;

use App\AbstractFactory\Interfaces\ProductInterface;
use App\AbstractFactory\Interfaces\ShippingMethodInterface;

interface ShopFactoryInterface {

    public function createProduct($productCode): ProductInterface;
    public function createShippingMethod($name): ShippingMethodInterface;
    
}
