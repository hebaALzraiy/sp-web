<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


$factory->define(App\Employee::class, function ($faker) {
    return [
        'Email' => $faker->email,
        'JobTitel' => $faker->titel,

    ];
});
