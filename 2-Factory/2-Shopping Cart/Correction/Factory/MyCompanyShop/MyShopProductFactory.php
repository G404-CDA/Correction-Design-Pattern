<?php


namespace App\Factory\MyCompanyShop;


use App\Factory\ShopingCartFramework\ProductFactoryInterface;
use App\Factory\ShopingCartFramework\ProductInterface;


    // @TODO implement MyShopProductFactory with internal database of:
    //        $database = [
    //            'BumperSticker1' => 'Cool bumper sticker',
    //            'CoffeeTableBook5' => 'Coffee Table book',
    //        ];
    

class MyShopProductFactory implements ProductFactoryInterface{

    protected $database = [
                    'BumperSticker1' => 'Cool bumper sticker',
                    'CoffeeTableBook5' => 'Coffee Table book'
                ];
    
    public function createProduct($productCode): ProductInterface
    {
        return new MyShopProduct($productCode, $this->database[$productCode]);
    }

}