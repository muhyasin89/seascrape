<?php

use App\Subscriber;
use League\FactoryMuffin\Faker\Facade as Faker;

class SubscriberTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        $this->email= Faker::email();
        $this->status= Faker::word();
        $this->user_id= Faker::Integer();
        $this->category_id= Faker::Integer();
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $subscriber = \Codeception\Stub::make(Subscriber::class,['getEmail' => $this->email, 'getStatus'=> $this->status,
            'getUserId' =>$this->user_id, 'getCategoryId'=> $this->category_id]);
        $this->assertEquals($this->email, $subscriber->getEmail);
        $this->assertEquals($this->status, $subscriber->getStatus);
        $this->assertEquals($this->user_id, $subscriber->getUserId);
        $this->assertEquals($this->category_id, $subscriber->getCategoryId);
    }
}