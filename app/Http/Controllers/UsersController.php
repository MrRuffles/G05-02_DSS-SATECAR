<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function getAllUsers(){ 
        $usuarios = User::getAllUsersByDNI();
        return view('listadoUsuarios')->with('usuarios', $usuarios);
    }
}
