@extends('layout')

    @section('content')
        <h1>Crear Receta</h1>

        <form method="POST" action = {{url('deliapasteles/store')}}>
            {{csrf_field()}}
                Titulo<br><input type="text" name="titulo" value={{old('titulo')}}><br>                  
                Ingredientes<br><input type="text" name="ingredientes" value={{old('ingredientes')}}><br>
                Preparacion<br><input type="text" name="preparacion" value={{old('preparacion')}}><br> 
                <br><input type="submit" value="Enviar">
        </form>
    @endsection        