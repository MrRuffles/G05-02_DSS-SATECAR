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
            $table->increments('id');
            //matricula
            $table->string('enrollment');
            $table->integer('years');
            $table->integer('km');
            //modelo
            $table->string('tradeMark');
            $table->string('color');
            //Consumo a los 100 km
            $table->float('fuelConsumption');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->integer('concessionaire_id')->unsigned();
            $table->foreign('concessionaire_id')->references('id')->on('concessionaires');
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
        Schema::dropIfExists('cars');
    }
}
