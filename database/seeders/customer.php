<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\customer::class,10)->create();

    }
}
