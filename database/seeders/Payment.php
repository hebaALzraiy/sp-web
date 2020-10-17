<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Payment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Payment::class,10)->create();

    }
}
