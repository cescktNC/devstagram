<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Directiva 'yield' - para agregar contenido dinámico con la directiva 'section'
        Yield es como si fuera un contenedor y agrega el contenido dentro. El parámetro entre comillas es el nombre
        que se le da al yield y sirve para diferenciarlos, ya que en una página puede haber varios. -->
        <title>Devstagram - @yield('titulo')</title>

    </head>
    <body>
        <nav>
            <a href="/">Principal</a>
            <a href="/nosotros">Nosotros</a>
            <a href="/tienda">Tienda</a>
            <a href="/contacto">Contacto</a>
        </nav>
        
        <h1>@yield('titulo')</h1>

        @yield('contenido')

    </body>
</html>