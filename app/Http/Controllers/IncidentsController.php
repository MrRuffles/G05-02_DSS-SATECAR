<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
class IncidentsController extends Controller
{
    public function view(){
        $incidents = Incident::orderBy('price')->paginate(5);
        return view('incidents', ['incidents' => $incidents]);
    }
}
