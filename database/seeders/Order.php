<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Order::class,10)->create();

    }
}
