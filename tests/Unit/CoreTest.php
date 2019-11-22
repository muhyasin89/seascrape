<?php
use App\Core;
use League\FactoryMuffin\Faker\Facade as Faker;

class CoreTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        $this->title = Faker::word();
        $this->content = Faker::text();
        $this->category = Faker::word();
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $core = \Codeception\Stub::make(Core::class,['getTitle'=> $this->title, 'getContent'=>$this->content, 'getCategory' => $this->category]);

        $this->assertEquals($this->title, $core->getTitle);
        $this->assertEquals($this->content, $core->getContent);
        $this->assertEquals($this->category, $core->getCategory);
    }
}