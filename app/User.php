<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use DB;
use App\Car;

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
        'dni','name', 'surnames' , 'adress', 'phone' ,'typeUser' , 'email', 'password'

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
        $usuarios = User::orderBy('name', 'ASC')->paginate(7);
        return $usuarios;
    }

    public static function getUserById($id){
        // En este caso uso first por que quiero solo el primer elemento que encuentra en ese campo, first devuelve un unico objeto
        $usuario = User::where('id', '=', $id)->first();
        return $usuario;
    }

    // ESTA FUNCION ME DEVOLVERA TODO LOS COCHES QUE TIENE ALQUILADOS EL USUARIO
    public static function getAllUserRent($idUsuario){
        /*
            select car_id, date from rents where user_id = $idUsuario
        */
        $coches_alquilados = DB::table('rents')->select('car_id', 'date')->where('user_id', '=', $idUsuario)->paginate(3);
        return $coches_alquilados;
    }

    public static function getUsersRentCars(){
        $clients_rented = array();
        $clients_rented = DB::select('SELECT DISTINCT name, users.id FROM users, rents WHERE users.id = rents.user_id ');
        return $clients_rented;
    }
    public static function getAllUserRentedCars($idUsuario){
        $coches_alquilados = DB::select('SELECT rents.car_id, cars.enrollment, brands.name FROM rents, cars, brands WHERE rents.car_id = cars.id AND rents.car_id = brands.id AND rents.user_id = :idUsuario', ['idUsuario' => $idUsuario]);
        return $coches_alquilados;
    }


    public static function updateUser(Request $request, $usuario){
        $usuario->update($request->all());
    }

    public static function getUsersBy($nombre, $email){
        //$usuarios = DB::table('users')->select('*')->where('name', '=', $nombre, 'AND', 'email', '=', $email)->paginate(7);
        $usuarios = array();
        $usuarios = DB::table('users')->where('name', '=', $nombre)->Where('email', '=', $email)->paginate(7);
        return $usuarios;
    }

    public static function giveBack($id_usuario, $id_coche){
        DB::table('rents')->where('car_id', '=', $id_coche)->Where('user_id', '=', $id_usuario)->delete();
        $coche = Car::getCarById($id_coche);
        $coche->available = true;
        $coche->save();
    }
 
}
