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
        return view('alquiler')->with('dias', 0)
        ->with('coches_disponibles', $coches_disponibles)
        ->with('fecha_inicio', $fecha_inicio)
        ->with('fecha_final', $fecha_final)
        ->with('precio', 0);
    }

    public function getDateOfRent(){
        $fecha_inicio = $_POST["fecha_inicio"];
        $fecha_final = $_POST["fecha_final"];
        echo $fecha_inicio . " " . $fecha_final;
        $coches_disponibles = Car::getCarsAvailable();
        return view('alquiler')->with('dias', 0)
        ->with('coches_disponibles', $coches_disponibles)
        ->with('fecha_inicio', $fecha_inicio)
        ->with('fecha_final', $fecha_final)
        ->with('precio', 0);
    }

    public function rent(Request $request, $idCoche, $fecha_inicio, $fecha_final){
        $fecha_i = Carbon::parse($fecha_inicio);
        $fecha_f = Carbon::parse($fecha_final);
        $diferenciaDias = $fecha_f->diffInDays($fecha_i);
        // TENGO QUE CALCULAR EL COSTE
        echo "La diferencia de dias es: " . $diferenciaDias . "\n";
        $id_usuario = Auth::user()->id;
        DB::table('rents')->insert([
            'car_id' => $idCoche,
            'user_id' => $id_usuario,
            'date' => $fecha_i,
            'date_end' => $fecha_f
        ]);
        $coches_disponibles = Car::getCarsAvailable();
        $precio = $diferenciaDias * 50;
        return view('alquiler')->with('dias', $diferenciaDias)
        ->with('coches_disponibles', $coches_disponibles)
        ->with('fecha_inicio', $fecha_inicio)
        ->with('fecha_final', $fecha_final)
        ->with('precio', $precio);
    }

    public function confirmRent(){
         // TENGO QUE RESTARLE AL USUARIO EL SALDO CORRESPONDIENTE Y CAMBIAR EL AVAILABLE DEL COCHE A FALSE
    }


}
