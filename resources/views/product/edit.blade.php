@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    <h1>Editar Productos</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('producto.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Nombre del Producto</label>
                <input class="form-control" type="text" name="name" id="name" value="{{$product->name}}" required>
            </div>
            <div class="mb-3">
                <label for="sku">SKU del producto</label>
                <input class="form-control" type="text" name="sku" id="sku" value="{{$product->sku}}" required>
            </div>
            <div class="mb-3">
                <label for="quantity">Cantidad</label>
                <input class="form-control" type="number" name="quantity" id="quantity" value="{{$product->quantity}}" required>
            </div>
            <div class="mb-3">
                <label for="price">Precio</label>
                <input class="form-control" type="text" name="price" id="price" value="{{$product->price}}" required>
            </div>    
            <button type="submit" class="btn btn-primary">Editar producto y lote</button>
        </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop