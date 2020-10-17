<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('SealesRepEmployeeNum');
            $table->string('Name', 255);
            $table->string('LastName', 255);
            $table->string('FirstName', 255);
            $table->string('Phone', 255);
            $table->string('Address1', 255);
            $table->string('Address2', 255);
            $table->string('City', 255);
            $table->string('State', 255);
            $table->integer('PostalCode');
            $table->string('Country', 255);
            $table->decimal('CreditLimit', 19, 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
