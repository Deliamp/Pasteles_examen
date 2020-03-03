@extends('layout')

    @section('content')
        <h1>Crear Articulo</h1>

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

    <form method="POST" action = {{url('articulos/store')}}>
    {{csrf_field()}}
        Titulo<br><input type="text" name="titulo" value={{old('titulo')}}><br>
            @if ($errors->has('titulo'))
                <p>{{ $errors->first('titulo') }}</p>
            @endif                    
        Cuerpo<br><input type="text" name="cuerpo" value={{old('cuerpo', 'Defecto')}}><br>
            @if ($errors->has('cuerpo'))
                <p>{{ $errors->first('cuerpo') }}</p>
            @endif  
        Autor<br><input type="text" name="autor" value={{old('autor')}}><br>
            @if ($errors->has('autor'))
                <p>{{ $errors->first('autor') }}</p>
            @endif  
        <br><input type="submit" value="Enviar">
    </form>
    @endsection