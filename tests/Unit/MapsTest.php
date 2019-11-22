<?php

use App\Maps;
use League\FactoryMuffin\Faker\Facade as Faker;

class MapsTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        $this->location = Faker::country();
        $this->description = Faker::test();
        $this->maps = Faker::address();

    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $maps = \Codeception\Stub::make(Maps::class,['getLocation' => $this->location, 'getDescripton'=> $this->description,
            'getMaps'=> $this->maps ]);
        $this->assertEquals($this->location, $maps->getLocation);
        $this->assertEquals($this->description, $maps->getDescripton);
        $this->assertEquals($this->maps, $maps->getMaps);
    }
}