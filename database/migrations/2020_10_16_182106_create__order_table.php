<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->dateTime('OrderDate');
            $table->dateTime('RequiredData');
            $table->dateTime('ShippedData');
            $table->integer('Status');
            $table->string('Comments', 255);
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('Customers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_order');
    }
}
