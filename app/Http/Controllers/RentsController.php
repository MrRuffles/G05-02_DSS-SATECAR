<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Carbon\Carbon;
use Auth;
use DB;
class RentsController extends Controller
{
    public function getRent(){
        $coches_disponibles = array();
        $fecha_inicio = "";
        $fecha_final = "";
        return view('alquiler')->with('coches_disponibles', $coches_disponibles)
                                ->with('fecha_inicio', $fecha_inicio)
                                ->with('fecha_final', $fecha_final);
    }

    public function getDateOfRent(){
        $fecha_inicio = $_POST["fecha_inicio"];
        $fecha_final = $_POST["fecha_final"];
        echo $fecha_inicio . " " . $fecha_final;
        $coches_disponibles = Car::getCarsAvailable();
        return view('alquiler')->with('coches_disponibles', $coches_disponibles)
                                ->with('fecha_inicio', Carbon::parse($fecha_inicio))
                                ->with('fecha_final', Carbon::parse($fecha_final));
    }

    public function rent(Request $request, $idCoche, $fecha_inicio, $fecha_final){
        $id_usuario = Auth::user()->id;
        DB::table('rents')->insert([
            'car_id' => $idCoche,
            'user_id' => $id_usuario,
            'date' => Carbon::parse($fecha_inicio),
            'date_end' => Carbon::parse($fecha_final)
        ]);
        // TENGO QUE RESTARLE AL USUARIO EL SALDO CORRESPONDIENTE Y CAMBIAR EL AVAILABLE DEL COCHE A FALSE
        return view('paginaprincipal');
    }

}
