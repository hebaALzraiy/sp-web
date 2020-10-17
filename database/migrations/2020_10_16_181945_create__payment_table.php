<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_payment', function (Blueprint $table) {
            $table->string('CheckNum',255);
            $table->unsignedBigInteger('customer_id');
            $table->dateTime('PaymentDate');
            $table->decimal('Amount', 19, 0);
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
        Schema::dropIfExists('_payment');
    }
}
