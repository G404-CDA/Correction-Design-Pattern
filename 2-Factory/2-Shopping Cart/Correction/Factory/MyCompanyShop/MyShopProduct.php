<?php

namespace App\Factory\MyCompanyShop;

use App\Factory\ShopingCartFramework\ProductInterface;

class MyShopProduct implements ProductInterface{

    protected string $productCode;
    protected string $description;

    public function __construct(string $productCode, string $description)
    {
        $this->productCode = $productCode;
        $this->description = $description;
    }

    public function getShopProductCode(): string 
    {
        return $this->productCode;
    }
    
    public function getShopDescription(): string 
    {
        return $this->description;
    }
}