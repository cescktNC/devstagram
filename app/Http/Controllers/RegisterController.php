<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Método 'index' que por convención se usa para mostrar una vista
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Imprime el texto y detiene la ejecución de laravel en ese punto
        // dd($request);
        //dd($request->get('email')); // para acceder directamente a un valor del request del formulario se usa el método 'get()'

        // Validación
        $this->validate($request, [
            'name' => 'required | max:30',
            'username' => 'required | unique:users | min:3 | max:20', // Tiene que ser un valor único en la tabla de users, nadie puede tener el mismo 'username'
            'email' => 'required | unique:users | email | max:60',
            'password' => 'required'
        ]);
    }
}
