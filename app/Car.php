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

    // ESTA FUNCION LA HE HECHO YO NO LA BORREIS AL ARREGLAR CONFLICTOS PLEASEEEE
    public static function getCarById($id){
        $coche = Car::where('id', '=', $id)->first();
        return $coche;
    }
}
