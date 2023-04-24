@extends('adminlte::page')

@section('title', 'Crear Producto')

@section('content_header')
    <h1>Crear nuevo producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('producto.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name">Nombre del Producto</label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="sku">SKU del producto</label>
                    <input class="form-control" type="text" name="sku" id="sku" required>
                </div>
                <div class="mb-3">
                    <label for="quantity">Cantidad</label>
                    <input class="form-control" type="number" name="quantity" id="quantity" required>
                </div>
                <div class="mb-3">
                    <label for="price">Precio</label>
                    <input class="form-control" type="text" name="price" id="price" required>
                </div>
                <div class="mb-3">
                    <label for="lot_number">Número de lote</label>
                    <input class="form-control" type="text" name="lot_number" id="lot_number" required>
                </div>
                <div class="mb-3">
                    <label for="expiration_date">Fecha de vencimiento</label>
                    <input class="form-control" type="date" name="expiration_date" id="expiration_date" required>
                </div>
                <button type="submit" class="btn btn-primary">Crear producto y lote</button>
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