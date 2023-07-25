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

   <div class="card">
        <div class="card-header">            
            <a type="button" class="btn btn-success" href="{{ route('producto.create') }}">Nuevo Producto</a>
        </div>
        <div class="card-body">
            <table class="table">
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
                        </td>
                    </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>
        <div class="card-foother">
            {{$products->links()}}
        </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop