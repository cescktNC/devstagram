<!-- Directiva 'extends' - siempre apunta a 'views'
En esta directiva le pasas donde está la ubicación de la vista que se quiere cargar. En este caso se quiere 
cargar la vista 'app' por tanto se pasa por parámetro layouts.app (el punto . es equivalente a la barra /). 
Esta directiva se usa para no repetir tanto código, ya que normalmente, las diferentes secciones de una página 
web suelen tener la misma cabecera y menú. En este caso, la vista 'app' contiene el código que se repite en 
todas las secciones. -->
@extends('layouts.app')

<!-- Directiva 'section' - para agregar contenido en el contenedor generado por la directiva 'yield' -->
@section('titulo')
    Página principal
@endsection

@section('contenido')
    Contenido de esta página
@endsection