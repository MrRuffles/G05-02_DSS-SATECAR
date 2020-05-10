
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
//Rutas no registrado
Route::middleware('guest')->group(function(){
Route::get('coches', 'CarController@getAllCar');
Route::get('/concesionario', 'ConcessionaireController@getAllConcessionaire');
Route::get('/registroInicial', 'UsersController@getRegistroInicial'); // Devuelve la pagina que crea un nuevo usuario
Route::post('/registroInicial', 'UsersController@storeInicial'); // Realiza la accion de crear un usuario
});
Route::middleware('auth')->group(function(){
    Route::get('coches', 'CarController@getAllCar');
Route::get('/concesionario', 'ConcessionaireController@getAllConcessionaire');
Route::get('/usuario/{id}', 'UsersController@getPerfilUser'); // Devuelve la vista del perfil del usuario
});
//Rutas administrador
Route::middleware('admin')->group(function(){
//////////RUTAS COCHES//////////
////////////////////////////////
//Rutas obtener coches
//Route::get('coches', 'CarController@getAllCar');
Route::get('/coches/{id}', 'CarController@getCar');
//Rutas añadir coche
Route::get('/añadir' , 'CarController@addCar');
Route::post('/añadir' , 'CarController@saveCar');
//Rutas editar Coche
Route::get('/coches/{id}/editar' ,'CarController@getUpdate');
Route::post('/coches/{id}/editar' ,'CarController@updateCar');
//Ruta eliminar Coche
Route::post('/coches/{id}' ,'CarController@deleteCar');
////////////////////////////////////////////////////////////

// RUTAS RELACIONADAS CON LOS USUARIOS

Route::get('usuarios', 'UsersController@getAllUsers'); // Devuelve la pagina de listado de usuarios
Route::get('/registro', 'UsersController@getRegistro'); // Devuelve la pagina que crea un nuevo usuario
Route::post('/registro', 'UsersController@store'); // Realiza la accion de crear un usuario
Route::get('/usuario/{id}', 'UsersController@getPerfilUser'); // Devuelve la vista del perfil del usuario
Route::get('/usuario/{id}/editar', 'UsersController@getUpdateUser'); // Devuelve la vista de la pagina para editar los datos
Route::post('/usuario/{id}/editar', 'UsersController@update'); // Realiza la acción de editar los datos
Route::post('/usuario/{id}/borrar', 'UsersController@delete'); // Realiza la acción de borrar los datos
Route::post('/usuarios', 'UsersController@find'); // Realiza la busqueda por 2 campos distintos
Route::put('/usuario/{id}', 'UsersController@addSaldo'); // Realiza la acción de añadir saldo
/////////////////////////////////////////////////////////////////////

// RUTAS RELACIONADAS CON EL ALQUILER DE LOS VEHICULOS
Route::get('alquiler', 'RentsController@getRent');
Route::post('/alquiler/fechas', 'RentsController@getDateOfRent');
Route::post('/alquiler/{id}/{fecha_inicio}/{fecha_final}', 'RentsController@rent');

Route::get('incidentes', 'IncidentsController@view'); //Lista Incidentes (paginadas)
Route::get('marcas', 'BrandsController@view'); //Lista Marcas (paginadas)


//Rutas obtener concesionario
//Route::get('/concesionario', 'ConcessionaireController@getAllConcessionaire');
Route::get('/concesionario/{id}', 'ConcessionaireController@getConcessionaire');
Route::get('/crearConcesionario', 'ConcessionaireController@addConcessionaire');
Route::post('/crearConcesionario' , 'ConcessionaireController@storeConcessionaire');
Route::get('/concesionario/{id}/editar' ,'ConcessionaireController@getUpdateConcessionaire');
Route::post('/concesionario/{id}/editar' ,'ConcessionaireController@updateConcessionaire');
Route::post('/concesionario/{id}/borrar' ,'ConcessionaireController@deleteConcessionaire');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');