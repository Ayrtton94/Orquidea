@extends('adminlte::page')

@section('title', 'Categoria')

@section('content_header')
    <h1>Lista de categorias</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('category.create')}}" class="btn btn-success" type="submit">Nuevo Categoria</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Status</th>
                        <th>Fecha</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->id}}</td>
                        <td>{{$categoria->name}}</td>
                        <td>{{$categoria->description}}</td>
                        @if ($categoria->status == 1 )
                                        <td><span class="badge bg-success">Activo</span></td>                                    
                                    @else
                                         <td><span class="badge bg-danger">Eliminado</span></td> 
                                    @endif
                        <td>{{$categoria->date}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{url('category/'.$categoria->id.'/edit')}}">Editar</a>

                            <form action="{{ url('/category/'.$categoria['id'] ) }}" class="d-inline" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Quieres borrar?')" class="btn btn-danger" value="Borrar"> 
                            </form>
                        </td>
                    </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>
        <div class="card-foother">
            {{$categorias->links()}}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop