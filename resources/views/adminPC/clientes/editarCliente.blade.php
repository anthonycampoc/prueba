@extends('layouts.admin')

@section('content')

<section class="full-width pageContent">
   
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewClient" class="mdl-tabs__tab is-active">Actualizar</a>
        
        </div>
        <div class="mdl-tabs__panel is-active" id="tabNewClient">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                             Cliente
                        </div>
                        <div class="full-width panel-content">
                            <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <h5 class="text-condensedLight">Datos del Estudiante</h5>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{$cliente->nombre_1}}" name="nombre_1" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Nombre 1</label>
                                    @error('nombre_1')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{$cliente->nombre_2}}" name="nombre_2" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Nombre 2</label>
                                    @error('nombre_2')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{$cliente->apellido_1}}" name="apellido_1" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Apellido_1</label>
                                    @error('apellido_1')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{$cliente->apellido_1}}" name="apellido_2" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">apellido_2</label>
                                    @error('apellido_2')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{$cliente->cedula}}" name="cedula" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="DNIClient">Cedula</label>
                                    @error('cedula')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                             
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{$cliente->telefono}}" name="telefono" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="phoneClient">Telefono</label>
                                    @error('telefono')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{$cliente->email}}" name="email" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="emailClient">Correo</label>
                                    @error('email')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <label class="text-condensedLight" for="emailClient">Ingrese fecha nacimiento</label>
                                    <input value="{{$cliente->fecha_nacimiento}}" name="fecha_nacimiento" class="mdl-textfield__input" type="date" id="emailClient">
                                    @error('fecha_nacimiento')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="provincia_id" id="provincia_select" class="mdl-textfield__input">
                                        <option>Seleccione la Provincia</option>
                                        @foreach ($provincia as $item)
                                            <option value="{{$item->id}}"
                                                @if ($item->id == $cliente->provincia->id)
                                                selected
                                                @endif
                                                >
                                                {{$item->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="canton_id" id="canton_select"  class="mdl-textfield__input">
                                        <option>Seleccione la Canton</option>

                                        @foreach ($canton as $item)
                                        <option value="{{$item->id}}"
                                           @if ($item->id == $cliente->canton->id)
                                           selected
                                           @endif
                                       >{{$item->nombre}}</option>
                               @endforeach
            
                                    </select>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="asesor_id" class="mdl-textfield__input">
                                        <option value="" disabled="" selected="">Asesor</option>
                                        @foreach ($asesores as $item)
                                            <option value="{{$item->id}}"
                                                
                                                @if ($item->id == $cliente->asesor->id)
                                                selected
                                                @endif
                                                
                                                >{{$item->nombre_1}} {{$item->apellido_1}}</option>
                                        @endforeach
                                    </select>
                                </div>
  
                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="carrera_id" class="mdl-textfield__input">
                                        <option value="" disabled="" selected="">Seleccione la Carrera</option>
                                                @foreach ($carrera as $item)
                                                    <option value="{{$item->id}}"
                                                        
                                                        @if ($item->id == $cliente->carrera->id)
                                                        selected
                                                        @endif
                                                        >
                                                        
                                                        
                                                        {{$item->nombre}}</option>
                                                @endforeach
                                    </select>
                                </div>

                                <p class="text-center">
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addClient">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 15 15">
                                            <rect width="15" height="15" fill="none" />
                                            <path fill="white" fill-rule="evenodd" d="M1.903 7.297c0 3.044 2.207 5.118 4.686 5.547a.521.521 0 1 1-.178 1.027C3.5 13.367.861 10.913.861 7.297c0-1.537.699-2.745 1.515-3.663c.585-.658 1.254-1.193 1.792-1.602H2.532a.5.5 0 0 1 0-1h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V2.686l-.001.002c-.572.43-1.27.957-1.875 1.638c-.715.804-1.253 1.776-1.253 2.97m11.108.406c0-3.012-2.16-5.073-4.607-5.533a.521.521 0 1 1 .192-1.024c2.874.54 5.457 2.98 5.457 6.557c0 1.537-.699 2.744-1.515 3.663c-.585.658-1.254 1.193-1.792 1.602h1.636a.5.5 0 1 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 1 1 1 0v1.845h.002c.571-.432 1.27-.958 1.874-1.64c.715-.803 1.253-1.775 1.253-2.97" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div class="mdl-tooltip" for="btn-addClient">Actualizar</div>
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
