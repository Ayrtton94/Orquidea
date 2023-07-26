@extends('adminlte::page')

@section('title', 'Nuevo Proveedor')

@section('content_header')
    <h1>Nuevo Proveedor</h1>
@stop

@section('content')
<div class="main-section">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-10 col-md-10">
                <form action="{{ url('/provider')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if(count($errors)>0)
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{ $error }} </li>
                            @endforeach
                        </ul>                
                    </div>           
                       @endif
                       @if(session('error'))
                           <div class="alert alert-danger">
                               {{session('error')}}
                           </div>
                       @endif
        
                               <div class="card">
                                   <h5 class="card-header">Empresa</h5>
                                   <div class="card-body">
                                       <table class="table table-bordered">
                                           <thead>                                                
                                               <tr>
                                                   <th colspan="2"><input type="text" name="razon_social" class="form-control" placeholder="Razón Social"></th>
                                                   <th><input type="text" name="ruc" class="form-control" placeholder="RUC"></th>
                                               </tr>
                                               <tr>
                                                   <th><input type="text" name="rubro" class="form-control" placeholder="Rubro"></th>
                                                   <th colspan="2"><input type="text" name="pagina_web" class="form-control" placeholder="Página web"></th>
                                               </tr>
                                               <tr>
                                                   <th colspan="3"><input type="text" name="direccion" class="form-control" placeholder="Dirección"></th>
                                               </tr>
                                               <tr> 
                                                   <th>
                                                       <div class="col-md-15">
                                                           <select class="form-control" name="departamento_id" id="iddepartamento">
                                                               <option value="" disabled selected>Departamento</option>
                                                               @foreach($departamentos as $departamento)
                                                                   <option value="{{ $departamento->id}}">{{$departamento->name}}</option>
                                                               @endforeach
                                                           </select>
                                                       </div>
                                                       </th>
                                                   <th>
                                                       <div class="col-md-15">
                                                           <select class="form-control" name="provincia_id" id="idprovincia">
                                                               <option value="" disabled selected>Provincia</option>
                                                           </select>
                                                       </div>                                                
                                                   </th>
                                                   <th>
                                                       <div class="col-md-15">
                                                           <select class="form-control" name="distrito_id" id="iddistrito">
                                                               <option value="" disabled selected>Distrito</option>
                                                           </select>
                                                       </div>                                                
                                                   </th>
                                                 </tr>
                                           </thead>
                                       </table>
                                   </div>
                               </div>
                               
                               <div class="card">
                                   <h5 class="card-header">Persona de contacto</h5>
                                   <div class="card-body">
                                       <table class="table table-bordered">
                                           <thead>
                                               <tr>
                                                   <th colspan="2"><input type="text" name="nombres" class="form-control" placeholder="Nombres"></th>
                                                   <th colspan="2"><input type="text" name="apellidos" class="form-control" placeholder="Apellidos"></th>
                                               </tr>
                                               <tr>
                                                   <th>
                                                       <select class="form-control" name="tipo_doc" id="tipo_doc">
                                                           <option value="" disabled selected>Documento</option>
                                                            <option value="DNI">DNI</option> 
                                                            <option value="RUC">RUC</option>  
                                                            <option value="Otros">Otro</option>                                           
                                                       </select>
                                                   </th>
                                                   <th><input type="text" name="number_doc" class="form-control" placeholder="N°"></th>
                                                   <th>
                                                       <select class="form-control" name="genero" id="genero">
                                                           <option value="" disabled selected>Genero</option>
                                                               <option value="Hombre">Hombre</option> 
                                                               <option value="Mujer">Mujer</option> 
                                                               <option value="Otros">Otros</option>                                                                     
                                                       </select>
                                                   </th>
                                                   <th><input type="text" name="telefono" class="form-control" placeholder="Número de Teléfono"></th>
                                               </tr>
                                               <tr>
                                                   <th colspan="4"><input type="correo" class="form-control" name="correo" placeholder="Correo Electrónico"></th>
                                               </tr>
                                           </thead>
                                       </table>
                                   </div>
                               </div>
        
                               <div class="card">
                                   <div class="card-body">
                                     <table class="table table-bordered">
                                       <thead>
                                         <tr align="center">
                                           <th><button type="submit" class="btn btn-info">GUARDAR</button></th>
                                           <th><a href="/provider" class="btn btn-secondary">VOLVER</a></th>
                                         </tr>
                                       </thead>
                                     </table>
                                   </div>
                                 </div> 
                       
                   </form>
            </div>
        </div>
    </div>
</div>   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="/js/distrito/create.js"></script>
@stop