<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function brand(){
        return $this->belongsTo('App\Brand');
    }

    public function concessionaire(){
        return $this->belongsTo('App\Concessionaire');
    }

    protected $fillable = [
        'enrollment','years', 'km' , 'trademark', 'color' ,'fuelConsumption'
    ];

    /*
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
    }*/

    // ESTA FUNCION LA HE HECHO YO NO LA BORREIS AL ARREGLAR CONFLICTOS PLEASEEEE
    public static function getCarById($id){
        $coche = Car::where('id', '=', $id)->first();
        return $coche;
    }

}
