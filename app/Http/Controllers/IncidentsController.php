<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
use App\User;
use App\Car;
use Carbon\Carbon;
use DB;

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
        $idCoche = 0;
        $idIncidente = 0;
        return view('regIncidente')->with('clients_rented', $clients_rented)
                                    ->with('cars_rented',$cars_rented)
                                    ->with('idUsuario',$idUsuario)
                                    ->with('idCoche', $idCoche)
                                    ->with('incidents', $incidents)
                                    ->with('idIncidente', $idIncidente);
    }
    
    public function getCarsRented($idUsuario){
        $cars_rented = User::getAllUserRentedCars($idUsuario);
        $clients_rented = User::getUsersRentCars();
        $incidents = array();
        $idCoche = 0;
        $idIncidente = 0;
        return view('regIncidente')->with('clients_rented', $clients_rented)
                                    ->with('cars_rented',$cars_rented)
                                    ->with('idUsuario',$idUsuario)
                                    ->with('idCoche', $idCoche)
                                    ->with('incidents', $incidents)
                                    ->with('idIncidente', $idIncidente);
    }
    public function getIncidents($idUsuario, $idCoche){
        $cars_rented = User::getAllUserRentedCars($idUsuario);
        $clients_rented = User::getUsersRentCars();
        $incidents = Incident::getAllIncidents();
        $idIncidente = 0;
        return view('regIncidente')->with('clients_rented', $clients_rented)
                                    ->with('cars_rented',$cars_rented)
                                    ->with('idUsuario',$idUsuario)
                                    ->with('idCoche', $idCoche)
                                    ->with('incidents', $incidents)
                                    ->with('idIncidente', $idIncidente);
    }

    public function getRegister($idUsuario, $idCoche, $idIncidente){
        $cars_rented = User::getAllUserRentedCars($idUsuario);
        $clients_rented = User::getUsersRentCars();
        $incidents = Incident::getAllIncidents();
        $registro = Incident::getRegister($idUsuario,$idCoche,$idIncidente);
        $priceInc = 0;
        $balanceUs = null;
        return view('regIncidente')->with('clients_rented', $clients_rented)
                                    ->with('cars_rented',$cars_rented)
                                    ->with('idUsuario',$idUsuario)
                                    ->with('idCoche', $idCoche)
                                    ->with('incidents', $incidents)
                                    ->with('idIncidente', $idIncidente)
                                    ->with('registro', $registro);
    }
    public function confirmRegister($idUsuario, $idCoche, $idIncidente, $priceInc, $balanceUs){
        DB::beginTransaction();
        DB::table('suffers')->insert([
            'car_id' => $idCoche,
            'incident_id' => $idIncidente,
            'date' => Carbon::now()->format('Y-m-d')
            ]);
        $usuario = User::getUserById($idUsuario);
        if($balanceUs == null){
            $balanceUs = 0;
        }
        $usuario->balance =  $balanceUs - $priceInc;
        $usuario->save();
        DB::commit();
        return redirect()->action('IncidentsController@getClients');
    }
}
