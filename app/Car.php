<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //Devolvemos el nombre de todos lo coches
    public function showAllCars(){
        $cars = Car::all();
        foreach($cars as $car){
            var_dump($car->enrollment);
            var_dump($car->years);
            var_dump($car->km);
        }
    }
    //Buscar por matricula
    public function findCar($enrollment){
        $car = Car::where('enrollment','=', $enrollment)->get();
        var_dump($car->tradeMark);
        var_dump($car->years);
        var_dump($car->km);
        var_dump($car->color);
        var_dump($car->fuelConsumption);
    }
}
