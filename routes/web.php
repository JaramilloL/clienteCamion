<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistaController;
use App\Http\Controllers\AuxilarController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\JefeController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ViajeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Vehiculo;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('vista', VistaController::class);

Route::get('/inicio', function () {
    return view('publico.index',['vehiculos'=>Vehiculo::all()]);
});

Route::resource('auxiliar',AuxilarController::Class);
Route::resource('conductor',ConductorController::Class);
Route::resource('jefe',JefeController::Class);
Route::resource('registro',RegistroController::Class);
Route::resource('usuario',UsuarioController::Class);
Route::resource('vehiculo',VehiculoController::Class);
Route::resource('viaje',ViajeController::Class);

//Route::post('user', ['UserController@login']);
Route::post('user', [UserController::class, 'login']);

//rutas de cliente tokens
Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'register']);