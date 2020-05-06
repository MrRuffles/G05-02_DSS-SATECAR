<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
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
            'dni' => 'required|max:9|min:9|unique:users',
            'name' => 'required|max:100',
            'surnames' => 'required|max:100',
            'email' => 'required|email|unique:users',
            'phone' => 'required|max:9|min:9|unique:users',
            'adress' => 'required|max:100',
            'typeUser' => 'required',
        ]);
        User::create($request->all());
        $usuarios = User::getAllUsersByName();
        return redirect('/usuarios')->with('usuarios', $usuarios);
    }

    public function update(Request $request, $id){ 
        $this->validate($request, [
            'dni' => 'required|max:9|min:9',
            'name' => 'required|max:100',
            'surnames' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'required|max:9|min:9',
            'adress' => 'required|max:100',
            'typeUser' => 'required',
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

    public function find(SessionManager $sessionManager){
        $nombre = $_POST['name'];
        $email = $_POST['email'];
        $usuarios = User::getUsersBy($nombre, $email);
        if(count($usuarios) == 0){
            $usuarios = User::getAllUsersByName();
            $sessionManager->flash('mensaje', 'Esos datos no coinciden con ningun usuario, se volvera a mostrar el listado completo.');
        }
        else{
            $sessionManager->flash('mensaje', 'Esos son los datos del usuario buscado.');
        }
        return view('listadoUsuarios')->with('usuarios', $usuarios);
    }

    public function addSaldo(Request $request, $id){
        $this->validate(
            $request, ['balance' => 'nullable']
        );
        $usuario = User::getUserById($id);
        $valor = $_POST["newbalance"];
        $usuario->balance += $valor;
        $usuario->save();
        return redirect()->action('UsersController@getPerfilUser', $id);
    }

}
