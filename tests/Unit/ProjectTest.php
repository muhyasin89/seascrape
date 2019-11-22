<?php

use App\Project;
use League\FactoryMuffin\Faker\Facade as Faker;

class ProjectTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        $this->title= Faker::title();
        $this->client= Faker::word();
        $this->year= Faker::year();
        $this->location= Faker::state();
        $this->vesels= Faker::word();
        $this->duration= Faker::Integer();
        $this->wrov= Faker::word();
        $this->description= Faker::text();
        $this->next= Faker::Integer();
        $this->prev= Faker::Integer();
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $project = \Codeception\Stub::make(Project::class,['getTitle' => $this->title, 'getClient'=> $this->client,
            'getYear'=> $this->year, 'getLocation' => $this->location, 'getVessels' => $this->vesels, 'getDuration' => $this->duration,
            'getWrov'=> $this->wrov, 'getDescription' => $this->description, 'getNext' => $this->next, 'getPrev' => $this->prev
            ]);
        $this->assertEquals($this->title, $project->getTitle);
        $this->assertEquals($this->client, $project->getClient);
        $this->assertEquals($this->year, $project->getYear);
        $this->assertEquals($this->location, $project->getLocation);
        $this->assertEquals($this->vesels, $project->getVessels);
        $this->assertEquals($this->duration, $project->getDuration);
        $this->assertEquals($this->wrov, $project->getWrov);
        $this->assertEquals($this->description, $project->getDescription);
        $this->assertEquals($this->next, $project->getNext);
        $this->assertEquals($this->prev, $project->getPrev);
    }
}