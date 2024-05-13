@extends('layouts.admin')

@section('content')

<section class="full-width pageContent">
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewClient" class="mdl-tabs__tab is-active">Nuevo</a>
            <a href="#tabListClient" class="mdl-tabs__tab">Lista</a>
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

        
    </div>
</section>

@endsection
