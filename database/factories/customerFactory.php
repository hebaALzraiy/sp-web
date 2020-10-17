<?php

namespace Database\Factories;

use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


$factory->define(App\customer::class, function ($faker) {
    return [
        'Name' => $faker->word,
        'City' => $faker->city,

    ];
});
