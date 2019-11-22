<?php

use App\News;
use League\FactoryMuffin\Faker\Facade as Faker;

class NewsTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        $this->title = Faker::title();
        $this->year = Faker::year();
        $this->content = Faker::text();
        $this->prev = Faker::Integer();
        $this->next = Faker::Integer();
        $this->slug= Faker::url();
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $news = \Codeception\Stub::make(News::class,['getTitle' => $this->title, 'getYear'=> $this->year,
            'getContent'=> $this->content, 'getPrev' => $this->prev, 'getNext'=> $this->next, 'getSlug'=> $this->slug ]);

        $this->assertEquals($this->title, $news->getTitle);
        $this->assertEquals($this->year, $news->getYear);
        $this->assertEquals($this->content, $news->getContent);
        $this->assertEquals($this->prev, $news->getPrev);
        $this->assertEquals($this->next, $news->getNext);
        $this->assertEquals($this->slug, $news->getSlug);
    }
}