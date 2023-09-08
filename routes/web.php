<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Nueva ruta de Laravel, usando controlador
Route::get('/', HomeController::class);

//Nuevas rutas para la gestion de programacion academica
Route::controller(ProgramacionController::class)->group(function(){
    Route::get('programacion-academica', 'index');
    Route::get('programacion-academica/create', 'create');
    Route::get('programacion-academica/{procedimiento}', 'show');
});


/*
Route::get('/', function(){
    //return view('Bienvenido');
    return "Página principal";
});

//Nueva ruta
Route::get('programacion-academica', function(){
    return "Gestión de Programación Académica";
});

//Ruta Registro
Route::get('programacion-academica/create', function(){
    return "Registro";
});

Route::get('programacion-academica/{procedimiento}/{registro}', function($procedimiento, $registro=null){
    if($registro){
        return "Bienvenido al registro: $registro, del procedimiento $procedimiento";
    }else{
        return "Bienvenido al procedimiento: $procedimiento";
    }
});
*/