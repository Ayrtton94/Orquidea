@extends('adminlte::page')

@section('title', 'Editar Proveedor')

@section('content_header')
    <h1>Editar Proveedor</h1>
@stop

@section('content')

    <div class="main-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-10 col-md-10">
                  <div>
                      <form action="{{ url('/customer/'.$customer->id)}}" method="POST" enctype="multipart/form-data">
                          @csrf
                          {{method_field('PATCH')}}
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
                                                      <th colspan="2"><input type="text" name="razon_social" class="form-control" placeholder="Razón Social" value="{{ isset($customer->razon_social)?$customer->razon_social:'' }}"></th>
                                                      <th><input type="text" name="ruc" class="form-control" placeholder="RUC" value="{{ isset($customer->ruc)?$customer->ruc:'' }}"></th>
                                                  </tr>
                                                  <tr>
                                                      <th><input type="text" name="rubro" class="form-control" placeholder="Rubro" value="{{ isset($customer->rubro)?$customer->rubro:'' }}"></th>
                                                      <th colspan="2"><input type="text" name="pagina_web" class="form-control" placeholder="Página web" value="{{ isset($customer->pagina_web)?$customer->pagina_web:'' }}"></th>
                                                  </tr>
                                                  <tr>
                                                      <th colspan="3"><input type="text" name="direccion" class="form-control" placeholder="Dirección" value="{{ isset($customer->direccion)?$customer->direccion:'' }}"></th>
                                                  </tr>
                                                  <tr> 
                                                      <th>
                                                          <div class="col-md-15">
                                                              <select class="form-control" name="departamento_id" id="iddepartamento" required>
                                                                <option value="{{$departament->id}}" disabled selected>{{$departament->name}}</option>
                                                                 @foreach ($departamentos as $departamento)
                                                                 <option value="{{$departamento->id}}">{{$departamento->name}}</option>
                                                                 @endforeach
                                                              </select>
                                                          </div>
                                                          </th>
                                                      <th>
                                                          <div class="col-md-15">
                                                              <select class="form-control" name="provincia_id" id="idprovincia" required>
                                                                <option value="{{$provicia->id}}" disabled selected>{{$provicia->name}}</option>
                                                              </select>
                                                          </div>                                                
                                                      </th>
                                                      <th>
                                                          <div class="col-md-15">
                                                              <select class="form-control" name="distrito_id" id="iddistrito" required>
                                                                <option value="{{$distrito->id}}" disabled selected>{{$distrito->name}}</option>
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
                                                      <th colspan="2"><input type="text" name="nombres" class="form-control" placeholder="Nombres" value="{{ isset($customer->nombres)?$customer->nombres:'' }}"></th>
                                                      <th colspan="2"><input type="text" name="apellidos" class="form-control" placeholder="Apellidos" value="{{ isset($customer->apellidos)?$customer->apellidos:'' }}"></th>
                                                  </tr>
                                                  <tr>
                                                      <th>
                                                          <select class="form-control" name="tipo_doc" id="tipo_doc" required>
                                                            <option value="{{ isset($customer->tipo_doc)?$customer->tipo_doc:'' }}" disabled selected>{{$customer->tipo_doc}}</option>
                                                            <option value="DNI">DNI</option> 
                                                            <option value="RUC">RUC</option>  
                                                            <option value="Otros">Otro</option>                                                               
                                                          </select>
                                                      </th>
                                                      <th><input type="text" name="number_doc" class="form-control" placeholder="N°" value="{{ isset($customer->number_doc)?$customer->number_doc:'' }}"></th>
                                                      <th colspan="2"><input type="text" name="telefono" class="form-control" placeholder="Número de Teléfono" value="{{ isset($customer->telefono)?$customer->telefono:'' }}"></th>
                                                  </tr>
                                                  <tr>
                                                      <th colspan="4"><input type="correo" class="form-control" name="correo" placeholder="Correo Electrónico" value="{{ isset($customer->correo)?$customer->correo:'' }}"></th>
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
                                              <th><a href="/customers" class="btn btn-secondary">VOLVER</a></th>
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
    </div>
  </main>
@stop

@section('js')
    <script src="/js/distrito/create.js"></script>
@stop