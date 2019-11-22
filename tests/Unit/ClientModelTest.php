<?php

use App\ClientModel;
use League\FactoryMuffin\Faker\Facade as Faker;

class ClientModelTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        $this->faker = Faker::word();
        $this->image = Faker::imageUrl($width = 640, $height = 480);
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {

        $client = \Codeception\Stub::make(ClientModel::class,['getTitle' => $this->faker, 'getImage'=> $this->image ]);
        $this->assertEquals($this->faker, $client->getTitle);
        $this->assertEquals($this->image, $client->getImage);
    }
}