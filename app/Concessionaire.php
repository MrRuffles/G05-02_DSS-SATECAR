<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class Concessionaire extends Model
{
    public function cars(){
        return $this->hashMany('App\Car');
    }

    protected $fillable = [
        'name', 'address', 'cif', 'phone', 'city', 'country', 'email'
    ];

    public static function getConcessionaireByID($id){
        return Concessionaire::where('id','=', $id)->first();
    }
    public static function updateConcessionaire(Request $request, $conceU){
        $conceU->update($request->all());
    }
}
