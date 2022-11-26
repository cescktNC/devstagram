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
}
