<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function(){
    return "Hola Mundo";
});

Route::get('/nombre/{usuario?}', function($usuario = "Anonimo"){
    return "Saludo ".$usuario;
})->where('usuario', '[A-Za-z]+');


Route::group(['prefix' => 'estudiante'], function(){
    Route::get('/', 'App\Http\Controllers\EstudianteController@index');

    Route::get('crear', [EstudianteController::class, 'crear']);
});


/**Rutas para el ejemplo de plantilla blade */
Route::get('hija1', function(){
    return view('hija1');
});

Route::get('hija2', function(){
    return view('hija2');
});