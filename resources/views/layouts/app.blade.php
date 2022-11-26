<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Directiva 'yield' - para agregar contenido dinámico con la directiva 'section'
        Yield es como si fuera un contenedor y agrega el contenido dentro. El parámetro entre comillas es el nombre
        que se le da al yield y sirve para diferenciarlos, ya que en una página puede haber varios. -->
        <title>Devstagram - @yield('titulo')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        {{-- Padding: 5px | border bottom | background: white | box-shadow --}}
        <header class="p-5 border-b bg-white shadow">
            {{-- mx-auto = centrar contenido | estilos flex--}}
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">DevStagram</h1>
                {{-- estilos flez | separacion de 2 | misma alineacion vertical --}}
                <nav class="flex gap-2 items-center">
                    {{-- negrita | mayuscula | color | texto small --}}
                    <a class="font-bold uppercase text-gray-600 text-sm" href="#">Login</a>
                    <a class="font-bold uppercase text-gray-600 text-sm" href="#">Crear Cuenta</a>
                </nav>
            </div>
        </header>

        {{-- mt-10 = margin-top de 10px --}}
        <main class="container mx-auto mt-10">
            {{-- mb-10 = margin-bottom de 10px --}}
            <h2 class="font-black text-center text-3xl mb-10">@yield('titulo')</h2>
            @yield('contenido')
        </main>

        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            {{-- now() és una función de blade que te da la fecha actual --}}
            DevStagram - Todos los derechos reservados {{ now()->year }}
        </footer>

    </body>
</html>