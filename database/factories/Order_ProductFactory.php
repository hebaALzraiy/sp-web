<?php

namespace Database\Factories;

use App\Models\Order_Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


$factory->define(App\Order_Product::class, function ($faker) {
    return [
        'Qty' => $faker->randomNumber(4),


    ];
});
