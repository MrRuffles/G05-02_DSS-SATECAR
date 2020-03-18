
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
Route::get('/usuarios', 'UsersController@getAllUsers'); // Devuelve la pagina de listado de usuarios
Route::get('/registro', 'UsersController@getRegistro'); // Devuelve la pagina que crea un nuevo usuario
Route::post('/registro', 'UsersController@store'); // Realiza la accion de crear un usuario
Route::get('/usuario/{id}', 'UsersController@getPerfilUser'); // Devuelve la vista del perfil del usuario
Route::get('/usuario/{id}/editar', 'UsersController@getUpdateUser'); // Devuelve la vista de la pagina para editar los datos
Route::post('/usuario/{id}/editar', 'UsersController@update'); // Realiza la acción de editar los datos
/////////////////////////////////////////////////////////////////////