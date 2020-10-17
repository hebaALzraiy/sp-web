<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class office extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\office::class,10)->create();

    }
}
