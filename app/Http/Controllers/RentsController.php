<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;
use App\Car;
use Carbon\Carbon;
use Auth;
use DB;
class RentsController extends Controller
{
    public function getRent(SessionManager $sessionManager){
        if(Auth::user()->balance < 0){
            //echo "NO PUEDES ALQUILAR COCHES TIENES DEUDAS, AÑADE SALDO";
            $sessionManager->flash('mensaje', 'NO PUEDES ALQUILAR COCHES TIENES DEUDAS, AÑADE SALDO');
            return redirect()->action('UsersController@getPerfilUser', Auth::user()->id);
        }
        else{
            $coches_disponibles = array();
            $fecha_inicio = "";
            $fecha_final = "";
            return view('alquiler')->with('dias', 0)
            ->with('coches_disponibles', $coches_disponibles)
            ->with('fecha_inicio', $fecha_inicio)
            ->with('fecha_final', $fecha_final)
            ->with('precio', -1)
            ->with('idCoche', -1);
        }
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
        ->with('precio', -1)
        ->with('idCoche', -1);
    }

    public function rent(Request $request, $idCoche, $fecha_inicio, $fecha_final){
        $fecha_i = Carbon::parse($fecha_inicio);
        $fecha_f = Carbon::parse($fecha_final);
        $diferenciaDias = $fecha_f->diffInDays($fecha_i);
        // TENGO QUE CALCULAR EL COSTE
        //echo "La diferencia de dias es: " . $diferenciaDias . "\n";
        $id_usuario = Auth::user()->id;
        /*DB::table('rents')->insert([
            'car_id' => $idCoche,
            'user_id' => $id_usuario,
            'date' => $fecha_i,
            'date_end' => $fecha_f
        ]);*/
        $coches_disponibles = Car::getCarsAvailable();
        $precio = $diferenciaDias * 50;
        return view('alquiler')->with('dias', $diferenciaDias)
        ->with('coches_disponibles', $coches_disponibles)
        ->with('fecha_inicio', $fecha_inicio)
        ->with('fecha_final', $fecha_final)
        ->with('precio', $precio)
        ->with('idCoche', $idCoche);
    }

    public function confirmRent($idCoche, $coste_alquiler, $fecha_i, $fecha_f){
         // TENGO QUE RESTARLE AL USUARIO EL SALDO CORRESPONDIENTE Y CAMBIAR EL AVAILABLE DEL COCHE A FALSE
         /*
            Necesito
                -> Saldo usuario
                -> Coste del alquiler
                -> idVehiculo
         */
        //$saldo_usuario = Auth::user()->balance;
        DB::beginTransaction();
        if(Auth::user()->balance >= $coste_alquiler){
            DB::table('rents')->insert([
                'car_id' => $idCoche,
                'user_id' => Auth::user()->id,
                'date' => Carbon::parse($fecha_i),
                'date_end' => Carbon::parse($fecha_f)
            ]);
            Auth::user()->balance -= $coste_alquiler;
            Auth::user()->save();
            $coche_alquilado = Car::getCarById($idCoche);
            $coche_alquilado->available = false;
            $coche_alquilado->save();
            DB::commit();
            //return redirect()->action('RentsController@getRent');
            return redirect()->action('UsersController@getPerfilUser', Auth::user()->id);
        }
        else{
            // no se realiza el alquiler
            //DB::table('rents')->where('car_id', '=', $idCoche)->where('user_id', '=', Auth::user()->id)->delete();
            DB::rollback();
            return redirect('/');
        }
    }


}
