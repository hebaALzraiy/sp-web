<?php

namespace Database\Factories;

use App\Models\office;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


$factory->define(App\office::class, function ($faker) {
    return [

        'city' => $faker->city,

    ];
});
