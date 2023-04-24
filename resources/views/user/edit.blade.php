@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Editor de usuario</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif



  <div class="card">
    <div class="card-body">
        <p class="h5">Nombre</p>
        <p class="form-control">{{$user->name}}</p>

        <h2 class="h5">Lista de roles</h2>
        <form action="{{ url('/user/'.$user->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PATCH')}}
            @foreach($roles as $role)
            <div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{$role->id}}" name="roles[]">
                    <label class="form-check-label">
                        {{$role->name}}
                    </label>
                </div>
            </div>
            @endforeach
            <input type="submit" class="btn btn-primary mt-2" value="Asignar rol">
        </form>

    </div>
  </div>
@stop