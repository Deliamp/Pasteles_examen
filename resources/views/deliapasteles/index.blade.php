@extends('layout')

    @section('content')

        <h1>Recetas de pasteles</h1>
        <ul>
            @foreach($deliapasteles as $deliapastel)
                <li> {{$deliapastel->titulo}}
                    <a href={{route('detalle_receta',['id'=>$deliapastel->id])}}>Ver la receta</a>
                </li>
            @endforeach
        </ul>
    @endsection
    
    @section('sidebar')
        @parent
        <a href={{route('crear_receta')}}>Crear receta</a>
    @endsection