@extends('adminlte::page')

@section('title', 'Lineas')

@section('content_header')
    <h1>Lista de Lineas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('category.create')}}" class="btn btn-success" type="submit">Nuevo Lineas</a>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="dataTable">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@stop