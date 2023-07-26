@extends('adminlte::page')

@section('title', 'Producto')

@section('content_header')
    <h1>Listar productos</h1>
@stop

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        <strong>{{session('success')}}</strong>
    </div>
@endif

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">            
                <a type="button" class="btn btn-success" href="{{ route('producto.create') }}">Nuevo Producto</a>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>SKU</th>
                            <th>Precio</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->sku}}</td>
                            <td>{{$product->price}}</td>                        
                            <td>
                                <a type="button" class="btn btn-success" href="{{ url('product/'.$product->id.'/edit') }}">Editar</a>
                                <form action="{{ url('/product/'.$product['id'] ) }}" class="d-inline" method="post">
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