@extends('layout')

    @section('content')
        <h1>Detalles del Articulo</h1><br><br>
        <h2>{{$articulo->titulo}}</h2><br>
        <p>{{$articulo->cuerpo}}</p>
        <p>Autor: {{$articulo->autor}}</p>
        <a href={{url()->previous()}}>Volver</a>
    @endsection

    @section('sidebar')
    @parent
        <li><a href={{route('articulo_editar', ['articulo'=>$articulo])}}>Editar articulo</a></li>
        <li><a href={{route('articulo_eliminar',['articulo'=>$articulo])}}>Eliminar articulo</a></li>
    @endsection