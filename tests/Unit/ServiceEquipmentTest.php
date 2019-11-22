<?php

use App\ServiceEquipment;
use League\FactoryMuffin\Faker\Facade as Faker;

class ServiceEquipmentTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        $this->title = Faker::title();
        $this->description = Faker::paragraph();
        $this->pdf_file = Faker::imageUrl($width = 640, $height = 480);
        $this->next =  Faker::Integer();
        $this->prev = Faker::Integer();
        $this->image = Faker::imageUrl($width = 640, $height = 480);
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $service_equipment = \Codeception\Stub::make(ServiceEquipment::class,['getTitle' => $this->title, 'getDescription'=> $this->description,
            'getPdfFile' => $this->pdf_file, 'getNext' => $this->next, 'getPrev' => $this->prev, 'getImage' => $this->image
            ]);
        $this->assertEquals($this->title, $service_equipment->getTitle);
        $this->assertEquals($this->pdf_file, $service_equipment->getPdfFile);
        $this->assertEquals($this->description, $service_equipment->getDescription);
        $this->assertEquals($this->next, $service_equipment->getNext);
        $this->assertEquals($this->prev, $service_equipment->getPrev);
        $this->assertEquals($this->image, $service_equipment->getImage);
    }
}