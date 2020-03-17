
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

Route::get('cars', function(){
    return view('cars'/*, ['cars' => Car::all()]*/)->with('cars', Car::all()) ;
});

Route::get('cars/{id}', function($id){
    return view('car'/*, ['cars' => Car::all()]*/)->with('car', Car::find($id)) ;
});


// RUTAS RELACIONADAS CON LOS USUARIOS
Route::get('/usuarios', 'UsersController@getAllUsers');
Route::get('/registro', 'UsersController@getRegistro');
Route::post('/registro', 'UsersController@store');
Route::get('/usuario/{id}', 'UsersController@getPerfilUser');
Route::get('/usuario/{id}/editar', 'UsersController@getUpdateUser');
/////////////////////////////////////////////////////////////////////