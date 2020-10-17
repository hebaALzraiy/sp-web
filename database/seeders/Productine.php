<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Productine extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Productine::class,10)->create();

    }
}
