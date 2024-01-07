<?php

namespace App\Factory\ShopingCartFramework;

interface ProductInterface {
    public function getShopProductCode(): string;
    public function getShopDescription(): string;
}
