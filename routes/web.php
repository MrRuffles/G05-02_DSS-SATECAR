
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

// RUTAS RELACIONADAS CON LOS USUARIOS
Route::get('/usuarios', 'UsersController@getAllUsers'); // Devuelve la pagina de listado de usuarios
Route::get('/registro', 'UsersController@getRegistro'); // Devuelve la pagina que crea un nuevo usuario
Route::post('/registro', 'UsersController@store'); // Realiza la accion de crear un usuario
Route::get('/usuario/{id}', 'UsersController@getPerfilUser'); // Devuelve la vista del perfil del usuario
Route::get('/usuario/{id}/editar', 'UsersController@getUpdateUser'); // Devuelve la vista de la pagina para editar los datos
Route::post('/usuario/{id}/editar', 'UsersController@update'); // Realiza la acción de editar los datos
Route::post('/usuario/{id}/borrar', 'UsersController@delete'); // Realiza la acción de borrar los datos
/////////////////////////////////////////////////////////////////////

