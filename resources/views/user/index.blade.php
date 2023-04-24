@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif


<div class="card">

    <div class="card-header">
        <form action="#" id="search-form">
            <input class="form-control" type="text" name="search" id="search-input" placeholder="Buscar...">
        </form>
        <div id="search-results"></div>
    </div>

    @if($users->count())

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Roles</th>
                    <th>Accion</th>
                </tr>                            
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @foreach ($user->roles as $role)
                            <span class="badge badge-primary">{{ $role->name }}</span>
                        @endforeach
                    </td>
                    <td width="10px">
                        <a class="btn btn-primary" href="{{ url('/user/'.$user['id'].'/edit') }}">Editar</a>
                    </td>
                </tr>
                @endforeach                            
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        {{$users->links()}}
    </div>        
    @else
        <div class="card-body">
            <strong>No hay registro</strong>
        </div>
    @endif

    
</div>
@stop
@section('js')

    <script>
            $('#search-input').on('input', function() {
                var searchTerm = $(this).val();

        $.ajax({
            url: '{{ url("user") }}',
            type: 'GET',
            data: {search: searchTerm},
            success: function(data) {
                $('#search-results').html(data);
            }
        });
    });
    </script>
@stop