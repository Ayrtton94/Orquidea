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
                <input type="hidden" name="count" id="count" value="1">
                <div class="mb-3">
                    <label for="name">Proveedores</label>
                    <select class="form-control" aria-label="Default select example" name="provider_id">
                        <option selected>Proveedores</option>
                        @foreach ($providers as $provider)
                            <option value="{{$provider->id}}">{{$provider->razon_social}}</option>
                        @endforeach                                    
                    </select> 
                </div>
                <div class="mb-3">
                    <label for="lot_number">Número de lote</label>
                    <input class="form-control" type="text" name="lot_number" id="lot_number" required>
                </div>
                <div class="mb-3">
                    <label for="expiration_date">Fecha de vencimiento</label>
                    <input class="form-control" type="date" name="expiration_date" id="expiration_date" required>
                </div>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre del Producto</th>
                            <th>Categoria</th>
                            <th>SKU</th>
                            <th>Precio</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody id="detalles">
                        <tr>
                            <td><input class="form-control" type="text" name="productos[0][name]" id="name" required></td>
                            <td>
                                <select class="form-control" aria-label="Default select example" name="productos[0][category_id]">
                                    <option selected>Categoria</option>
                                    @foreach ($categorys as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach                                    
                                </select> 
                            </td>
                            <td><input class="form-control" type="text" name="productos[0][sku]" id="sku" required></td>
                            <td><input class="form-control" type="text" name="productos[0][price]" id="price" required></td>
                            <td><button type="button" class="btn btn-danger btn-sm remove-fields">Eliminar</button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" name="addfields" id="addfields" class="btn btn-primary">Agregar</button>
                <button type="submit" class="btn btn-primary">Crear producto y lote</button>
            </form>
        </div>
    </div>
@stop

@section('js')
<script>
 // Manejamos el evento clic en el botón para agregar más campos de formulario
 $('#addfields').click(function() {
        // Obtenemos el número actual de conjuntos de campos
        var count = parseInt($('#count').val());

        // Creamos un nuevo conjunto de campos y lo agregamos al final del formulario
        var fila = `
        <tr>
            <td><input class="form-control" type="text" name="productos[${count}][name]" id="name" required></td>
            <td>
                <select class="form-control" aria-label="Default select example" name="productos[${count}][category_id]">
                    <option selected>Categoria</option>
                    @foreach ($categorys as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach                                    
                </select> 
            </td>
            <td><input class="form-control" type="text" name="productos[${count}][sku]" id="sku" required></td>
            <td><input class="form-control" type="text" name="productos[${count}][price]" id="price" required></td>
            <td><button type="button" class="btn btn-danger btn-sm remove-fields">Eliminar</button></td>
        </tr>
        `;
        $('#detalles').append(fila);

        // Incrementamos el número de conjuntos de campos
        $('#count').val(count + 1);
    });

    // Adjunte un controlador de eventos clic para cada botón cerrar agregado
    $(document).on('click', '.remove-fields', function() {
        $(this).closest('tr').remove();
    });
    </script>
@stop