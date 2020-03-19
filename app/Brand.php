<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function cars(){
        return $this->hashMany('App\Car');
    }
    protected $fillable = [
        'name','yearofdeparture', 'country' , 'range'];

    public static function getBrandByID($id){
        return Brand::where('id','=', $id)->first();
    }
}
