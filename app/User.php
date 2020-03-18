<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
class User extends Authenticatable
{
    use Notifiable;

    public function cars(){
        return $this->belongsToMany('App\Car');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni','name', 'surnames' , 'adress', 'phone' ,'typeUser' , 'email'
    ];

    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*protected $hidden = [
        'password', 'remember_token',
    ];*/

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
   /* protected $casts = [
        'email_verified_at' => 'datetime',
    ];*/

    public static function getAllUsersByName(){
        // En este caso puedo uso get para obtener los objetos por que quiero obtener una lista, get devuelve una colección
        $usuarios = User::orderBy('name', 'ASC')->get();
        return $usuarios;
    }

    public static function getUserById($id){
        // En este caso uso first por que quiero solo el primer elemento que encuentra en ese campo, first devuelve un unico objeto
        $usuario = User::where('id', '=', $id)->first();
        return $usuario;
    }

    public static function updateUser(Request $request, $usuario){
        $usuario->update($request->all());
    }


}
