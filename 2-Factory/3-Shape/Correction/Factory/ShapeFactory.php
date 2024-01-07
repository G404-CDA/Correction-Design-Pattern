<?php 

namespace App\Factory;

use App\Exceptions\ShapeUnknownException;
use App\Factory\Interfaces\ShapeInterface;

class ShapeFactory {

	public static function build(string $shape): ShapeInterface
	{
		$factoryName = "App\\Factory\\Shapes\\" .ucfirst(strtolower($shape));
        if (!class_exists($factoryName)) {
            // return new Exception("Class not found", 404);
            throw new ShapeUnknownException("Sorry, i can't do this ! ", 404);
        }
        return new $factoryName;
	}
}