<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
class RentsController extends Controller
{
    public function getRent(){
        $coches_disponibles = array();
        return view('alquiler')->with('coches_disponibles', $coches_disponibles);
    }

    public function getDateOfRent(){
        $fecha_inicio = $_POST["fecha_inicio"];
        $fecha_final = $_POST["fecha_final"];
        echo $fecha_inicio . " " . $fecha_final;
        $coches_disponibles = Car::getCarsAvailable();
        return view('alquiler')->with('coches_disponibles', $coches_disponibles);
    }

}
