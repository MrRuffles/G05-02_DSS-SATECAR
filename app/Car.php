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

    protected $fillable = [
        'enrollment','years', 'km' , 'trademark', 'color' ,'fuelConsumption'
    ];
}
