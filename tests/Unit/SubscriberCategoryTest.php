<?php

use App\SubscriberCategory;
use League\FactoryMuffin\Faker\Facade as Faker;

class SubscriberCategoryTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        $this->category = Faker::word();
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $client = \Codeception\Stub::make(SubscriberCategory::class,['getCategory' => $this->category]);
        $this->assertEquals($this->category, $client->getCategory);
    }
}