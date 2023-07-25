@extends('adminlte::page')

@section('title', 'Editar Categoria')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/category/'.$category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PATCH')}}
                        <div class="form-group">
                            <label for="Nombre">Nombre del Area</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="Nombre">Fecha de registro</label>
                            <input type="date" name="date" id="date" class="form-control" value="{{$category->date}}" required>
                        </div>
                        <div class="form-group">
                            <label for="Nombre">Descripción</label>
                            <textarea class="form-control" name="description" id="description" rows="3">{{$category->description}}</textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
@stop