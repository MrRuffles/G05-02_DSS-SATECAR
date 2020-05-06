<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentsController extends Controller
{
    public function getRent(){
        return view('alquiler');
    }
}
