<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_employee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('office_code');
            $table->integer('reports To');
            $table->string('LastName', 255);
            $table->string('FirstName', 255);
            $table->string('Extension', 255);
            $table->string('Email', 255);
            $table->string('JobTitle', 255);
            $table->timestamps();
            $table->foreign('office_code')->references('code')->on('Offices');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_employee');
    }
}
