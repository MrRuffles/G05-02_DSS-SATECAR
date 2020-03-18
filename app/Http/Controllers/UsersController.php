<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        return view('perfilUsuario')->with('usuario', $usuario);
    }

    public function getUpdateUser($id){
        $usuario = User::getUserById($id);
        return view('editarUsuario')->with('usuario', $usuario);
        
    }

    public function store(Request $request){
        $this->validate($request, [
            'dni' => 'required',
            'name' => 'required',
            'surnames' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'adress' => 'required',
            'typeUser' => 'required'
        ]);
        User::create($request->all());
        $usuarios = User::getAllUsersByName();
        return view('listadoUsuarios')->with('usuarios', $usuarios);
    }

    public function update(Request $request, $id){ 
        $this->validate($request, [
            'dni' => 'required',
            'name' => 'required',
            'surnames' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'adress' => 'required',
            'typeUser' => 'required'
        ]);
        $usuario = User::getUserById($id);
        User::updateUser($request, $usuario);
        return view('perfilUsuario')->with('usuario', $usuario);
    }

}
