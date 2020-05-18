<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Concessionaire;
use App\Car;

class ConcessionaireController extends Controller{

    public function getAllConcessionaire(){
        $concesionarios = Concessionaire::orderBy('city')->paginate(7);
        return view('listadoConcesionarios')->with('concesionarios',$concesionarios);
    }
    public function getConcessionaire($id){
        $conce = Concessionaire::find($id);
        return view('concessionaire')->with('concesionario', $conce);
    }
    public function addConcessionaire(){
        return view('concessionaireForm');
    }
    public function getUpdateConcessionaire($id){
        $conceU = Concessionaire::find($id);
        return view('updateConcessionaire')->with('concesionario', $conceU);
    }
    public function deleteConcessionaire($id){
        $conceD = Concessionaire::find($id);
        $conceD->delete();
        $conceA = Concessionaire::orderBy('city')->paginate(7);
        return redirect('/concesionario')->with('concesionarios', $conceA);
    }
    public function storeConcessionaire(Request $request){
        $this->validate($request, [
            'name' => 'required|max:50',
            'address' => 'required|unique:concessionaires',
            'cif' => 'required|max:9|min:9|unique:concessionaires',
            'phone' => 'required|max:9|min:9|unique:concessionaires',
            'city' => 'required|max:50',
            'country' => 'required|max:50',
            'email' => 'required|email|unique:concessionaires'
        ]);
        Concessionaire::create($request->all());
        $conceA = Concessionaire::orderBy('city')->paginate(7);
        return redirect('/concesionario')->with('concesionarios', $conceA);
    }
    public function updateConcessionaire(Request $request, $id){ 
        $this->validate($request, [
            'name' => 'required|max:50',
            'address' => 'required',
            'cif' => 'required|max:9|min:9',
            'phone' => 'required|max:9|min:9',
            'city' => 'required|max:50',
            'country' => 'required|max:50',
            'email' => 'required|email'
        ]);
        $conceU = Concessionaire::getConcessionaireByID($id);
        Concessionaire::updateConcessionaire($request, $conceU);
        return view('concessionaire')->with('concesionario', $conceU);
    }
    public function getAllConcesionarios(){
        $concesionarios = Concessionaire::orderBy('city')->paginate(7);
        return view('concesionarios')->with('concesionarios',$concesionarios);
    }

}