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
}
