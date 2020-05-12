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
        $cars_rented = array();
        $incidents = array();
        $idUsuario = 0;
        return view('regIncidente')->with('clients_rented', $clients_rented)
                                    ->with('cars_rented',$cars_rented)
                                    ->with('idUsuario',$idUsuario)
                                    ->with('incidents', $incidents);
    }
    
    public function getCarsRented($idUsuario){
        $cars_rented = User::getAllUserRentedCars($idUsuario);
        $clients_rented = User::getUsersRentCars();
        $incidents = array();
        return view('regIncidente')->with('clients_rented', $clients_rented)
                                    ->with('cars_rented',$cars_rented)
                                    ->with('idUsuario',$idUsuario)
                                    ->with('incidents', $incidents);
    }
    public function getIncidents($idUsuario, $idCoche){
        $cars_rented = User::getAllUserRentedCars($idUsuario);
        $clients_rented = User::getUsersRentCars();
        $incidents = Incident::getAllIncidents();
        return view('regIncidente')->with('clients_rented', $clients_rented)
                                    ->with('cars_rented',$cars_rented)
                                    ->with('idUsuario',$idUsuario)
                                    ->with('idCoche', $idCoche)
                                    ->with('incidents', $incidents);
    }

    public function getRegister($idUsuario, $idCoche, $idIncidente){
        $cars_rented = User::getAllUserRentedCars($idUsuario);
        $clients_rented = User::getUsersRentCars();
        $incidents = Incident::getAllIncidents();
        return view('regIncidente')->with('clients_rented', $clients_rented)
                                    ->with('cars_rented',$cars_rented)
                                    ->with('idUsuario',$idUsuario)
                                    ->with('idCoche', $idCoche)
                                    ->with('incidents', $incidents)
                                    ->with('idIncidente', $idIncidente);
    }
}
