<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Employee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Employee::class,10)->create();

    }
}
