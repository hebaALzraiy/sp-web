<?php

namespace Database\Factories;

use App\Models\Productine;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


$factory->define(App\Productine::class, function ($faker) {
    return [
        'DesclnText' => $faker->word,

    ];
});
