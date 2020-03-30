<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concessionaire extends Model
{
    public function cars(){
        return $this->hashMany('App\Car');
    }

    protected $fillable = [
        'name', 'address', 'cif', 'phone', 'city', 'country', 'email'];

    public static function getConcessionaireByID($id){
        return Concessionaire::where('id','=', $id)->first();
    }
}
