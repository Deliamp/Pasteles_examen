@extends('layout')

    @section('content')
        <h1>La Receta recetastica</h1><br><br>
        <h3>{{$deliapasteles->titulo}}</h3><br>
        <p>{{$deliapasteles->ingredientes}}</p><br>
        <p>{{$deliapasteles->preparacion}}</p><br>
        <a href={{url()->previous()}}>Volver</a>
    @endsection

