<?php declare(strict_types=1);

namespace Tests;

use App\Factory\Factories\DirectorBoatFactory;
use App\Factory\Entities\HeroShip;
use PHPUnit\Framework\TestCase;

final class ShipFactoryTest extends TestCase {
    
    public function testTapU(){

        $hero = new HeroShip(200);

        $dFactory = new DirectorBoatFactory("U");
        $factory = $dFactory->createFactory();
        $boat = $factory->createBoat();
        $this->assertSame(170, $boat->sendDamage($hero));
    }
    public function testTapR(){

        $hero = new HeroShip(200);

        $dFactory = new DirectorBoatFactory("R");
        $factory = $dFactory->createFactory();
        $boat = $factory->createBoat();
        $this->assertSame(180, $boat->sendDamage($hero));
    }
    public function testTapE(){

        $hero = new HeroShip(200);

        $dFactory = new DirectorBoatFactory("E");
        $factory = $dFactory->createFactory();
        $boat = $factory->createBoat();
        $this->assertSame(190, $boat->sendDamage($hero));
    }
    public function testTapB(){

        $hero = new HeroShip(200);

        $dFactory = new DirectorBoatFactory("B");
        $factory = $dFactory->createFactory();
        $boat = $factory->createBoat();
        $this->assertSame(160, $boat->sendDamage($hero));
    }
}