<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

// Cuando se visita la pagina '/crear-cuenta', se llama al controlador 'RegisterController'.
// La nomenclatura es poner el nombre del controlador seguida de '::class' para especificar
// que se quiere hacer uso de esa clase y después entre comillas sencillas se le pasa el
// método que se quiere cargar. En este caso el método 'index' pq por convención es el que
// muestra una vista
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']); // Se puede poner el name tb pero al tener la misma URL ya adopta el mismo name q se ha asignado en la línea anteerior