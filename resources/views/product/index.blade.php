@extends('adminlte::page')

@section('title', 'Listar Producto')

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
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Lote</th>
                        <th>Fecha</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->sku}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->price}}</td>
                        @foreach ($product->lots as $lot)
                        <td>{{$lot->lot_number}}</td>
                        <td>{{$lot->expiration_date}}</td>
                        @endforeach
                        
                        <td></td>
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