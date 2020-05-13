<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Incident extends Model
{
    public function cars(){
        return $this->belongsToMany('App\Car');
    }

    protected $fillable = [
        'type','description', 'price' , 'grade'
    ];

    public static function getAccidentbyCarID($id){
        $accidente = Incident::where('id', '=', $id)->first();
        return $accidente;
    }

    public static function getAllIncidents(){
        $incidents = Incident::all();
        return $incidents;
    }

    public static function getRegister($idUs, $idC, $idI){
        $registro = DB::select('SELECT `price`,`type` , users.name, users.balance, cars.enrollment FROM `incidents`, users, cars WHERE incidents.id = :idI AND users.id = :idUs AND cars.id = :idC', ['idI'=>$idI,'idUs' => $idUs, 'idC'=> $idC]);
        return $registro;
    }
}
