@extends('layouts.app')

@section('content')

    <form action="{{route('users.update', ['user' => $user])}}" method="POST" class="text-center">   
        
        @method('PUT')

        {{ csrf_field() }}
        
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" size="40" value="{{$user->name}}">
        </div>
        <div>
            <label for="dni">Cedula</label>
            <input type="number" name="dni" size="40" value="{{$user->dni}}">
        </div>    
        <div>
            <label for="municipio">Municipio</label>
            <input type="text" name="municipio" size="40" value="{{$user->municipio}}">
        </div>
        <div>
            <label for="email">Correo</label>
            <input type="email" name="email" size="40" value="{{$user->email}}" readonly>
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" size="40">
        </div>
        <div>
            <label for="rol">Funcion</label>
            <select name='rol'>
                <option value='register'>Registrador</option>
                <option value='admin'>Administrador</option>
            </select>
        </div>

        <div>
            <button type="submit">Editar Usuario</button>
            <button type="reset">Borrar Todo</button>
        </div>
    </form>

@endsection