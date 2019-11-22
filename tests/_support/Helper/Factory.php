<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I
use League\FactoryMuffin\Faker\Facade as Faker;

class Factory extends \Codeception\Module
{
    protected $factory;

    public function _initialize()
    {
        $this->factory = new \League\FactoryMuffin\Factory;
        $this->factory->define('ClientModel', array(
            'title' =>  Faker::title(),
            'image' => Faker::imageUrl(400, 600),
        ));
    }

    public function produce($model, $attributes = array())
    {
        return $this->factory->create($model, $attributes);
    }

    public function _after(\Codeception\TestCase $test)
    {
        // actually this is not needed
        // if you use cleanup: true option
        // in Laravel4 module
        $this->factory->deleteSaved();
    }
}