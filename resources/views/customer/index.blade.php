@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Lista de clientes</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-success" type="submit" href="{{route('customer.create')}}">Nuevo Cliente</a>
        </div>
        <div class="card-body">
            <table class="table table">
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
                            ||
                                    
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
        <div class="card-foother">

        </div>
    </div>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop