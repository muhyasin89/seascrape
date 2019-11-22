<?php
use Faker\Generator as Faker;
use App\ClientModel;
use League\FactoryMuffin\Facade as FactoryMuffin;
/**
 * Created by PhpStorm.
 * User: muhyasin89
 * Date: 12/02/18
 * Time: 13.52
 */

/*$factory->define(App\ClientModel::class, function (Faker $faker) {
    static $password;

    return [
        'title' => $faker->title
    ];
});*/

FactoryMuffin::define('ClientModel', array(
    'title'      => 'factory|ClientModel',

), function ($object, $saved) {
    // we're taking advantage of the callback functionality here
    $object->message .= '!';
});