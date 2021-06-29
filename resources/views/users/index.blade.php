@extends('layouts.app')

@section('content')

    <h3> Usuarios </h3>

    @if(Session::has('notice'))
       <p> <strong> {{ Session::get('notice') }} </strong> </p>
    @endif

    @if($users->count())
        @foreach ($users as $user)
            <tr>
                <td>{{$user}}</td>
                <td><a href="{{route('users.edit', $user)}}">Editar</a></td>
                <td>
                    <form id="delete" action="{{route('users.destroy', $user)}}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="#" onclick="document.getElementById('delete').submit()">Borrar</a>
                    </form>
                </td>
            </tr>
        @endforeach
    @else
       <p> No se han encontrado usuarios </p>
    @endif
    <br>
    <br>
    <div>
        <a href="{{route('users.create')}}">Crear usuario</a>
    </div>
    

@endsection