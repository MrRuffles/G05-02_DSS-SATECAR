<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concessionaire;
use App\Car;

class ConcessionaireController extends Controller{

    public function getAllConcessionaire(){
        $concesionarios = Concessionaire::All();
        return view('listadoConcesionarios')->with('concesionarios',$concesionarios);
    }
    public function getConcessionaire($id){
        $conce = Concessionaire::find($id);
        return view('concessionaire')->with('concesionario', $conce);
    }
    public function addConcessionaire(){
        return view('concessionnaireForm');
    }
    public function getUpdateConcessionaire($id){
        $conceU = Concessionaire::find($id);
        return view('updateConcessionaire')->with('concesionario', $conceU);
    }
    public function deleteConcessionaire($id){
        $conceD = Concessionaire::find($id);
        $conceD->delete();
        return $this->getAllConcessionaire();
    }
    public function storeConcessionaire(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'adress' => 'required',
            'cif' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'country' => 'required',
            'email' => 'required'
        ]);
        Concessionaire::create($request->all());
        $conceA = Concessionaire::getAllConcessionaire();
        return view('listadoConcesionarios')->with('concesionarios', $conceA);
    }
    public function updateConcessionaire(Request $request, $id){ 
        $this->validate($request, [
            'name' => 'required',
            'adress' => 'required',
            'cif' => 'required',
            'phone' => 'required',
            'city' => 'required',
            'country' => 'required',
            'email' => 'required'
        ]);
        $conceU = Concessionaire::getConcessionaire($id);
        Concessionaire::updateConcessionaire($request, $conceU);
        return view('concessionaire')->with('concesionarios', $conceU);
    }
}