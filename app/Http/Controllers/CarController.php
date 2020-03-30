<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Incident;
use App\Car;
use App\Brand;
use App\Concessionaire;
use App\DB;
class CarController extends Controller {
    
    public function getAllCar(){
        $brands = array();
        $cars = Car::orderby('brand_id')->paginate(7);
        $i = 0;
        foreach($cars as $car){
            $brands[$i++] = Brand::getBrandByID($car->brand_id);
        }
        return view('car/cars')->with('cars', $cars)->with('brands', $brands);
    } 

    public function addCar(){
        return view('car/carForm');
    }
    public function getUpdate($id){
        $car = Car::find($id);
        $brand = Brand::getBrandByID($car->brand_id);
        $conces = Concessionaire::getConcessionaireByID($car->concessionaire_id);
        return view('car/updateCar')->with('car', $car)->with('brand', $brand)->with('conces', $conces);
    }
    public function getCar($id){
        $car = Car::find($id);
        $brand = Brand::getBrandByID($car->brand_id);
        $accidentes_sufridos = Car::getAllIncidentsByCar($id);
        $datos_concretos_accidentes = array();
        $i = 0;
        foreach($accidentes_sufridos as $accidente_sufrido){
            $accidente = Incident::getAccidentbyCarID($car->id);
            $datos_concretos_accidentes[$i++] = $accidente;
        }
        $conces = Concessionaire::getConcessionaireByID($car->concessionaire_id);

        return view('car/car')->with('car', $car)
                          ->with('brand', $brand)
                          ->with('accidentes', $accidentes_sufridos)
                          ->with('datos_accidente', $datos_concretos_accidentes)
                          ->with('conces', $conces);
    }
    public function deleteCar($id){
        $car = Car::find($id);
        $car->delete();
        return redirect('/coches');
    }

    public function saveCar(Request $request){
        
        $car = new Car();
        $car->enrollment = $request->input('enrollment');
        $car->years =  $request->input('years');
        $car->km =  $request->input('km');
        $car->tradeMark =  $request->input('tradeMark');
        $car->color =  $request->input('color');
        $car->fuelConsumption =  $request->input('fuelConsumption');
        $brand = Brand::where('name', $request->input('brand'))->first()->id;
        $conces = Concessionaire::where('name', $request->input('conces'))->first()->id;
        $car->brand()->associate($brand);
        $car->concessionaire()->associate($conces);
        $car->save();
        return redirect('/coches');
    }

    public function updateCar(Request $request, $id){
        $car = Car::find($id);   
        $car->enrollment = $request->input('enrollment');
        $car->years =  $request->input('years');
        $car->km =  $request->input('km');
        $car->tradeMark =  $request->input('tradeMark');
        $car->color =  $request->input('color');
        $car->fuelConsumption =  $request->input('fuelConsumption');
        $brand = Brand::where('name', $request->input('brand'))->first()->id;
        $conces = Concessionaire::where('name', $request->input('conces'))->first()->id;
        $car->brand()->associate($brand);
        $car->concessionaire()->associate($conces);
        $car->save();
        return redirect("/coches/{$id}");

    }
}