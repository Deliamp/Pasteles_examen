@extends('layout')

    @section('content')

        <h1>Listado de Articulos</h1>

        <ul>
        @foreach($articulos as $articulo)
           <li> {{$articulo->titulo}}
            <a href={{--action('ArticlesController@show',['id'=>$articulo->id])--}}
                    {{--asset("articulos/$article->id")--}}
                    {{--url("articulos",[$articulo->id])--}}
                    {{route('detalle_articulo',['id'=>$articulo->id])}}>Ver detalles</a></li>
        @endforeach
        </ul>
    @endsection

    @section('sidebar')
    @parent
        <a href={{route('crear_articulo')}}>Crear articulo</a>
    @endsection

    