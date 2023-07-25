@extends('adminlte::page')

@section('title', 'Proveedores')

@section('content_header')
    <h1>Lista de Proveedores</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('provider.create')}}" class="btn btn-success" type="submit">Nuevo Proveedor</a>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Razon social</th>
                        <th>Ruc</th>
                        <th>Rubro</th>
                        <th>Nombre y Apellido</th>
                        <th>tipo de documento</th>
                        <th>Numero de documento</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proveedores as $proveedore)
                        <tr>
                            <td>{{$proveedore->id}}</td>
                            <td>{{$proveedore->razon_social}}</td>
                            <td>{{$proveedore->ruc}}</td>
                            <td>{{$proveedore->rubro}}</td>
                            <td>{{$proveedore->nombres}} {{$proveedore->apellidos}}</td>
                            <td>{{$proveedore->tipo_doc}}</td>
                            <td>{{$proveedore->number_doc}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{ url('/provider/'.$proveedore['id'].'/edit') }}">Editar</a>

                                
                                    
                                <form action="{{ url('/provider/'.$proveedore['id'] ) }}" class="d-inline" method="post">
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
            {{$proveedores->links()}}
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