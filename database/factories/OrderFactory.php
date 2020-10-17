<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


$factory->define(App\Order::class, function ($faker) {
    return [
        'OrderDate' => $faker->dateTime,

    ];
});
