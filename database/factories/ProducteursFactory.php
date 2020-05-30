<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producteurs;
use App\User;
use Faker\Generator as Faker;

$factory->define(Producteurs::class, function (Faker $faker) {
    return [
        "name" => $faker->lastname,
        "id_user" => User::all()->random()->id,
      
    ];
});
