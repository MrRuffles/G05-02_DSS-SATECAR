<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
use App\User;
use App\Car;
class IncidentsController extends Controller
{
    public function view(){
        $incidents = Incident::orderBy('price')->paginate(5);
        return view('incidents', ['incidents' => $incidents]);
    }

    public function getClients(){
        $clients_rented = User::getUsersRentCars();
        return view('regIncidente', ['clients_rented' => $clients_rented]);
    }
    
    public function getCarsRented($idUsuario){
        $cars_rented = User::getAllUserRent($idUsuario);
        return view();
    }
}
