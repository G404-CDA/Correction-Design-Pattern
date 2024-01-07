<?php

use App\Factory\Factories\OperationFactory;

use PHPUnit\Framework\TestCase;



class CalculatriceFactoryTest extends TestCase {
    
    public function testAdditionCalculate(){
       
        $number1 = 5;
        $number2 = 5;
        $factory = new OperationFactory('aDDition');
        $typeFactory  = $factory->createFactory();
        $entity = $typeFactory->createCalculation($number1 ,$number2);
        $entity->calculationType();

        $this->assertSame($number1 + $number2 ,$entity->calculationType());
    }
    public function testSoustractionCalculate(){
       
        $number1 = 5;
        $number2 = 5;
        $factory = new OperationFactory('soustractioN');
        $typeFactory  = $factory->createFactory();
        $entity = $typeFactory->createCalculation($number1 ,$number2);
        $entity->calculationType();

        $this->assertSame($number1 - $number2 ,$entity->calculationType());
    }
    public function testMultiplicationCalculate(){
       
        $number1 = 5;
        $number2 = 5;
        $factory = new OperationFactory('multipliCation');
        $typeFactory  = $factory->createFactory();
        $entity = $typeFactory->createCalculation($number1 ,$number2);
        $entity->calculationType();

        $this->assertSame($number1 * $number2 ,$entity->calculationType());
    }
}
