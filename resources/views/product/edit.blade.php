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
            <hr>
            <table>
                <thead>
                    <tr>
                        <th>Número de lote</th>
                        <th>Fecha de vencimiento</th>
                        <th>Cantidad del lote</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product->lots as $lot)
                        <tr>
                            <td><input type="text" name="lot_number[]" value="{{ $lot->lot_number }}" required></td>
                            <td><input type="date" name="expiration_date[]" value="{{ $lot->expiration_date }}" required></td>
                            <td><input type="number" name="lot_quantity[]" value="{{ $lot->quantity }}" required></td>
                            <td><button type="button" class="remove-lot">Eliminar lote</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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