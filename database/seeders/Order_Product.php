<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Order_Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Order_Product::class,10)->create();

    }
}
