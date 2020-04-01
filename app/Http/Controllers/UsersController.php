<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Car;

class UsersController extends Controller
{
    public function getAllUsers(){ 
        $usuarios = User::getAllUsersByName();
        return view('listadoUsuarios')->with('usuarios', $usuarios);
    }

    public function getRegistro(){
        return view('registroUsuario');
    }

    public function getPerfilUser($id){
        $usuario = User::getUserById($id);
        $coches_alquilados = User::getAllUserRent($id); // Tengo el id de todos los coches alquilados y su fecha de alquiler
        $datos_concretos_coches = array();
        $i = 0;
        foreach($coches_alquilados as $coche_alquilado){
            $coche = Car::getCarById($coche_alquilado->car_id);
            $datos_concretos_coches[$i++] = $coche;
        }
        return view('perfilUsuario')->with('usuario', $usuario)
                                    ->with('coches', $coches_alquilados)
                                    ->with('datos_coche', $datos_concretos_coches);
    }

    public function getUpdateUser($id){
        $usuario = User::getUserById($id);
        return view('editarUsuario')->with('usuario', $usuario);
        
    }

    public function store(Request $request){
        $this->validate($request, [
            'dni' => 'required|max:9|unique:users',
            'name' => 'required|max:255',
            'surnames' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|max:9|unique:users',
            'adress' => 'required|max:255',
            'typeUser' => 'required'
        ]);
        User::create($request->all());
        $usuarios = User::getAllUsersByName();
        return redirect('/usuarios')->with('usuarios', $usuarios);
    }

    public function update(Request $request, $id){ 
        $this->validate($request, [
            'dni' => 'required|max:9|unique:users',
            'name' => 'required|max:255',
            'surnames' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|max:9|unique:users',
            'adress' => 'required|max:255',
            'typeUser' => 'required'
        ]);
        $usuario = User::getUserById($id);
        User::updateUser($request, $usuario);
        return redirect()->action('UsersController@getPerfilUser', $id);
    }
    // AHORA MISMO NO SE PUEDEN BORRAR USUARIOS QUE TENGAN UN COCHE ALQUILADO, PRIMERO TENEMOS QUE ELIMINAR EL QUE ESTE ALQUILADO
    public function delete(Request $request, $id){
        $usuario = User::getUserById($id)->delete();
        $usuarios = User::getAllUsersByName();
        return redirect('/usuarios')->with('usuarios', $usuarios);
    }

    public function find(){
        $nombre = $_POST['name'];
        $email = $_POST['email'];
        $usuarios = User::getUsersBy($nombre, $email);
        return view('listadoUsuarios')->with('usuarios', $usuarios);
    }

}
