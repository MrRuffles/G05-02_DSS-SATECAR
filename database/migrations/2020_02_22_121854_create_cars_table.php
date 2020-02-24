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
            //matricula
            $table->string('enrollment')->primary();
            $table->integer('years');
            $table->integer('km');
            //modelo
            $table->string('tradeMark');
            $table->string('color');
            //Consumo a los 100 km
            $table->float('fuelConsumption');
            //$table->string('brand');
            //$table->foreign->references('name')->('brands')
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
