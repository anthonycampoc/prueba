@extends('layouts.admin')

@section('content')

<section class="full-width pageContent">
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewClient" class="mdl-tabs__tab is-active">Nuevo</a>
            <a href="#tabListClient" class="mdl-tabs__tab">Activados</a>
            <a href="#tabListClient2" class="mdl-tabs__tab">Desactivados</a>
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
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese su telefono</label>
                                    @error('telefono')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

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
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                        <thead>
                            <tr>
                            
                                <th>Nombre y apellido</th>
                                <th>Cedula</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Imagen</th>
                                <th colspan="2">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($asesorA as $item)
                                <tr>
                                    <td>{{$item->nombre_1}} {{$item->apellido_1}}</td>
                                    <td>{{$item->cedula}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->telefono}}</td>
                                    <td><img width="100px" height="50px" src="{{asset('imagen/'.$item->imagen)}}" ></td>
                                
                                    <td>
                                    

                                        <a title="ESTADO"  class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" href="{{route('asesor.estado', $item->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                <rect width="24" height="24" fill="none" />
                                                <path fill="black" d="M21 10.12h-6.78l2.74-2.82c-2.73-2.7-7.15-2.8-9.88-.1a6.887 6.887 0 0 0 0 9.8c2.73 2.7 7.15 2.7 9.88 0c1.36-1.35 2.04-2.92 2.04-4.9h2c0 1.98-.88 4.55-2.64 6.29c-3.51 3.48-9.21 3.48-12.72 0c-3.5-3.47-3.53-9.11-.02-12.58a8.987 8.987 0 0 1 12.65 0L21 3zM12.5 8v4.25l3.5 2.08l-.72 1.21L11 13V8z" />
                                            </svg>
                                        </a>
                                        <hr>
                                        
                                    <a title="EDITAR"  class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" href="{{route('asesor.edit', $item->id)}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 384 384">
                                            <rect width="384" height="384" fill="none" />
                                            <path fill="black" d="M0 304L236 68l80 80L80 384H0zM378 86l-39 39l-80-80l39-39q6-6 15-6t15 6l50 50q6 6 6 15t-6 15" />
                                        </svg>
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
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                        <thead>
                            <tr>
                            
                                <th>Nombre y apellido</th>
                                <th>Cedula</th>
                                <th>Correo</th>
                                <th>Telefono</th>
                                <th>Imagen</th>
                                <th colspan="2">Options</th>
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
                                    

                                        <a title="ESTADO"  class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" href="{{route('asesor.estado', $item->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                <rect width="24" height="24" fill="none" />
                                                <path fill="black" d="M21 10.12h-6.78l2.74-2.82c-2.73-2.7-7.15-2.8-9.88-.1a6.887 6.887 0 0 0 0 9.8c2.73 2.7 7.15 2.7 9.88 0c1.36-1.35 2.04-2.92 2.04-4.9h2c0 1.98-.88 4.55-2.64 6.29c-3.51 3.48-9.21 3.48-12.72 0c-3.5-3.47-3.53-9.11-.02-12.58a8.987 8.987 0 0 1 12.65 0L21 3zM12.5 8v4.25l3.5 2.08l-.72 1.21L11 13V8z" />
                                            </svg>
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
