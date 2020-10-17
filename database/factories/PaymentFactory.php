<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


$factory->define(App\Payment::class, function ($faker) {
    return [
        'PaymentDate' => $faker->dateTime,

    ];
});
