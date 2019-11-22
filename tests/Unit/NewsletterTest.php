<?php

use App\Newsletter;
use League\FactoryMuffin\Faker\Facade as Faker;

class NewsletterTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        $this->title = Faker::title();
        $this->content= Faker::text();
        $this->description = Faker::text();
        $this->date = Faker::date();
        $this->publish = Faker::date();
        $this->type = Faker::word();
        $this->slug = Faker::url();
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $newsletter = \Codeception\Stub::make(Newsletter::class,['getTitle' => $this->title, 'getContent'=> $this->content,
            'getDescription' => $this->description, 'getDate' => $this->date, 'getPublish'=> $this->publish, 'getType' => $this->type,
            'getSlug'=> $this->slug]);

        $this->assertEquals($this->title , $newsletter->getTitle);
        $this->assertEquals($this->content , $newsletter->getContent);
        $this->assertEquals($this->description , $newsletter->getDescription);
        $this->assertEquals($this->date , $newsletter->getDate);
        $this->assertEquals($this->publish , $newsletter->getPublish);
        $this->assertEquals($this->type , $newsletter->getType);
        $this->assertEquals($this->slug , $newsletter->getSlug);
    }
}