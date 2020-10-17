<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


$factory->define(App\Product::class, function ($faker) {
    return [
        'Name' => $faker->word,


    ];
});
