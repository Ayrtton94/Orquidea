@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Lista de clientes</h1>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a class="btn btn-success" type="submit" href="{{route('customer.create')}}">Nuevo Cliente</a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="dataTable">
                    <thead class="thead">
                        <tr>
                            <th>#</th>
                            <th>Razon Social</th>
                            <th>Ruc</th>
                            <th>Rubro</th>
                            <th>Nombre y Apellido</th>
                            <th>Documento</th>
                            <th>Numero de documento</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->razon_social}}</td>
                            <td>{{$customer->ruc}}</td>
                            <td>{{$customer->rubro}}</td>
                            <td>{{$customer->nombres}} {{$customer->apellidos}}</td>
                            <td>{{$customer->tipo_doc}}</td>
                            <td>{{$customer->number_doc}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{url('/customer/'.$customer->id.'/edit')}}">Editar</a>
                                        
                                    <form action="{{ url('/customer/'.$customer['id'] ) }}" class="d-inline" method="post">
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
        </div>
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