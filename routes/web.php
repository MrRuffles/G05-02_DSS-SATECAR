
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Car;
Route::get('/', function () {
    return view('paginaprincipal');
});

//Rutas obtener coches
Route::get('/coches', 'CarController@getAllCar');
Route::get('/coches/{id}', 'CarController@getCar');

//Rutas añadir coche
Route::get('/añadir' , 'CarController@addCar');
Route::post('/añadir' , 'CarController@saveCar');

//Rutas editar Coche
Route::get('/coches/{id}/editar' ,'CarController@getUpdate');
Route::post('/coches/{id}/editar' ,'CarController@updateCar');

//Ruta eliminar Coche
Route::post('/coches/{id}/eliminar' ,'CarController@deleteCar');
