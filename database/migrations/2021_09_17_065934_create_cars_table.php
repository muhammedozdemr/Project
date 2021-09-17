<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('car_id');
            $table->integer('client_id')->unsigned();
            $table->string('licence_number',100);
            $table->string('chassis_number',100);
            $table->string('year',5);
            $table->string('model',250);
            $table->string('manufacturer',250);
            $table->string('registration_date',50);
            $table->timestamps();
            $table->foreign('client_id')->references('client_id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
