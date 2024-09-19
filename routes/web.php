<?php

use App\Http\Controllers\MarcaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}) ->name('welcome');


// Route::get('/autos', function () {

//     $age = 2015;
//     $datos=['name'=>'Honda', 'des'=>'Automovil deportivo', 'age'=>$age];

//     return view('/marcas/index', $datos);
// }) -> name('auto');

// Route::get('/autos', function () {
//     return view('/marcas/index');
// }) -> name('auto');

Route::get('marca',[MarcaController::class, 'index']) -> name('auto');