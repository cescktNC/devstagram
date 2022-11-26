<?php

use Illuminate\Support\Facades\Route;

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

// Cuando se visita la pagina principal '/', se imprime la vista llamada 'principal'
Route::get('/', function () {
    return view('principal');
});

// Cuando se visita la pagina '/nosotros', se imprime la vista llamada 'nosotros'
Route::get('/nosotros', function () {
    return view('nosotros');
});

// Cuando se visita la pagina '/tienda', se imprime la vista llamada 'tienda'
Route::get('/tienda', function () {
    return view('tienda');
});