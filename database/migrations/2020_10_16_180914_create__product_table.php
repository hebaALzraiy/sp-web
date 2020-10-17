<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_product', function (Blueprint $table) {
            $table->integer('code');
            $table->unsignedBigInteger('productine_id');
            $table->string('Name', 255);
            $table->integer('Scale');
            $table->string('Vendor', 255);
            $table->string('PdtDescrption', 255);
            $table->integer('QtyInStock');
            $table->decimal('BuyPrice', 19, 0);
            $table->string('MSRP', 255);
            $table->timestamps();
            $table->foreign('productine_id')->references('id')->on('productines');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_product');
    }
}
