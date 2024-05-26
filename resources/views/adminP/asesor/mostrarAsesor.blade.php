@extends('layouts.admin')

@section('content')

<section class="full-width pageContent">
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewClient" class="mdl-tabs__tab is-active">Nuevo</a>
            @can('editar.asesor')
                <a href="#tabListClient" class="mdl-tabs__tab">Activados</a>
                <a href="#tabListClient2" class="mdl-tabs__tab">Desactivados</a>
            @endcan
         
        </div>
        <div class="mdl-tabs__panel is-active" id="tabNewClient">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            Asesor
                        </div>
                        <div class="full-width panel-content">
                            <form action="{{route('asesor.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h5 class="text-condensedLight">Datos Asesor</h5>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input  value="{{old('nombre_1')}}" name="nombre_1" class="mdl-textfield__input" type="text"  id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese su primero nombre</label>
                                    @error('nombre_1')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input  value="{{old('nombre_2')}}" name="nombre_2" class="mdl-textfield__input" type="text"  id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese su segundo nombre</label>
                                    @error('nombre_2')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{old('apellido_1')}}" name="apellido_1" class="mdl-textfield__input" type="text"  id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese su primer apellido</label>
                                    @error('apellido_1')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{old('apellido_2')}}" name="apellido_2" class="mdl-textfield__input" type="text"  id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese su segundo apellido</label>
                                    @error('apellido_2')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{old('cedula')}}" name="cedula" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese su cedula</label>
                                    @error('cedula')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{old('email')}}" name="email" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese su correo</label>
                                    @error('email')
                                     <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{old('telefono')}}" name="telefono" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese su telefono(No incluya el 0)</label>
                                    @error('telefono')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                                @can('admin.asesor')
                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="adminAsesor"  class="mdl-textfield__input">
                                        <option value="" disabled="" selected="">Administrador</option>
                                        <option value="1">Si</option>
                                        <option value="2">No</option>
                                        @error('adminAsesor')
                                            <p style="color: red;">{{$message}}</p>
                                        @enderror
                                    </select>
                                </div>
                                @endcan


                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <label class="text-condensedLight" for="NameClient">Inserta una imagen</label>
                                    <input value="{{old('imagen')}}"  name="imagen" class="mdl-textfield__input" type="file" id="NameClient">
                                    @error('imagen')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                                
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <label class="text-condensedLight" for="emailClient">Ingrese fecha nacimiento</label>
                                    <input value="{{old('fecha_nacimiento')}}" name="fecha_nacimiento" class="mdl-textfield__input" type="date" id="emailClient">
                                    @error('fecha_nacimiento')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                                
                                <input name="link" type="hidden">

                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="provincia_id" id="provincia_select" class="mdl-textfield__input">
                                        <option value="" disabled="" selected="">Seleccione la Provincia</option>
                                        @foreach ($provincia as $item)
                                            <option value="{{$item->id}}">{{$item->nombre}}</option>
                                        @endforeach

                                        @error('provincia_id')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                    </select>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="canton_id" id="canton_select"  class="mdl-textfield__input">
                                        <option >Seleccione el canton</option>
                                    </select>
                                    @error('canton_id')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="empresa_id" class="mdl-textfield__input">
                                        <option value="" disabled="" selected="">Seleccione la Empresa</option>

                                        @foreach ($empresa as $item)
                                                <option value="{{$item->id}}">{{$item->nombre}}</option>
                                        @endforeach

                                        @error('empresa_id')
                                            <p style="color: red;">{{$message}}</p>
                                        @enderror
                                       
                                    </select>
                                </div>

                                <p class="text-center">
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addClient">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button>
                                    <div class="mdl-tooltip" for="btn-addClient">Guardar</div>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mdl-tabs__panel" id="tabListClient">
            <div class="full-width divider-menu-h"></div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                    <table id="example" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                        <thead>
                            <tr>
                            
                                <th>Nombre y apellido</th>
                                <th>Cedula</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Provincia</th>
                                <th>Canton</th>
                                <th>Imagen</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($asesorA as $item)
                                <tr>
                                    <td>{{$item->nombre_1}} {{$item->apellido_1}}</td>
                                    <td>{{$item->cedula}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->telefono}}</td>
                                    <td>{{$item->provincia}}</td>
                                    <td>{{$item->canton}}</td>
                                    <td><img width="100px" height="50px" src="{{asset('imagen/'.$item->imagen)}}" ></td>
                                    <td>
                                    

                                        <a title="ESTADO"  href="{{route('asesor.estado', $item->id)}}">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/ogkflacg.json"
                                                trigger="click"
                                                style="width:30px;height:30px">
                                            </lord-icon>
                                        </a>
                                        <hr>
                                        
                                    <a title="EDITAR"  href="{{route('asesor.edit', $item->id)}}">
                                        <lord-icon
                                            src="https://cdn.lordicon.com/depeqmsz.json"
                                            trigger="click"
                                            style="width:30px;height:30px">
                                        </lord-icon>
                                    </a>
                            
                                    </td>
                                </tr>
                            @endforeach
                        
                        
                        </tbody>
                    </table>
                </div>
            </div>
     
            <!-- fin lista cliente -->
        </div>

        <div class="mdl-tabs__panel" id="tabListClient2">
            <div class="full-width divider-menu-h"></div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                    <table id="example" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                        <thead>
                            <tr>
                            
                                <th>Nombre y apellido</th>
                                <th>Cedula</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Imagen</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($asesorD as $item)
                                <tr>
                                    <td>{{$item->nombre_1}} {{$item->apellido_1}}</td>
                                    <td>{{$item->cedula}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->telefono}}</td>
                                    <td><img width="100px" height="50px" src="{{asset('imagen/'.$item->imagen)}}" ></td>
                                
                                    <td>
                                    

                                        <a title="ESTADO"   href="{{route('asesor.estado', $item->id)}}">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/ogkflacg.json"
                                                trigger="click"
                                                style="width:30px;height:30px">
                                            </lord-icon>
                                        </a>
                            
                                    </td>
                                </tr>
                            @endforeach
                        
                        
                        </tbody>
                    </table>
                </div>
            </div>
     
            <!-- fin lista cliente -->
        </div>

        
    </div>
</section>

@endsection
