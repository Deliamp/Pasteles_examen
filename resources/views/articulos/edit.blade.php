@extends('layout')

    @section('content')
        <h1>Modificar el Articulo {{$articulo->id}}</h1>
    
    <form method="POST" action = {{url("articulos/edit/{$articulo->id}")}}>
    {{csrf_field()}}

        Titulo<br><input type="text" name="titulo" value={{($articulo->titulo)}}><br>
            @if ($errors->has('titulo'))
                <p>{{ $errors->first('titulo') }}</p>
            @endif                    
        Cuerpo<br><input type="text" name="cuerpo" value={{($articulo->cuerpo)}}><br>
            @if ($errors->has('cuerpo'))
                <p>{{ $errors->first('cuerpo') }}</p>
            @endif  
        Autor<br><input type="text" name="autor" value={{($articulo->autor)}}><br>
            @if ($errors->has('autor'))
                <p>{{ $errors->first('autor') }}</p>
            @endif  
        <br><input type="submit" value="Enviar">
    </form>
    @endsection