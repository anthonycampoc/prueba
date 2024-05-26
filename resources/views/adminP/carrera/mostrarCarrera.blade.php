@extends('layouts.admin')

@section('content')

<section class="full-width pageContent">
    
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewClient" class="mdl-tabs__tab is-active">Nuevo</a>
            <a href="#tabListClient" class="mdl-tabs__tab">Activado</a>
            <a href="#tabListClient2" class="mdl-tabs__tab">Desactivado</a>
        </div>
        <div class="mdl-tabs__panel is-active" id="tabNewClient">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            Carrera
                        </div>
                        <div class="full-width panel-content">
                            <form action="{{route('carrera.store')}}" method="POST"  enctype="multipart/form-data">
                                @csrf
                                <h5 class="text-condensedLight">Datos Carrera</h5>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{old('nombre')}}" name="nombre" class="mdl-textfield__input" type="text" id="NameClient">
                                    
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese la Carrera</label>
                                    @error('nombre')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{old('cantEstudiante')}}" name="cantEstudiante" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese Cantidad de estudiante</label>
                                    @error('cantEstudiante')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{old('duracion')}}" name="duracion" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese la Duraccion</label>
                                    @error('duracion')
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
                                
                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="facultad_id" class="mdl-textfield__input">
                                        <option value="" disabled="" selected="">Seleccione la Facultad</option>

                                        @foreach ($facultad as $item)
                                                <option value="{{$item->id}}">{{$item->titulo}}</option>
                                        @endforeach
                                       
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

            <!-- inicio lista cliente -->
        <div class="mdl-tabs__panel" id="tabListClient">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                        <thead>
                            <tr>
                            
                                <th>Nombre</th>
                                <th>Cantidad de estudiantes</th>
                                <th>Duracion</th>
                                <th>Imagen</th>
                                <th colspan="2">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carreraA as $item)
                                <tr>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->cantEstudiante}}</td>
                                    <td>{{$item->duracion}} semestres</td>
                                    <td><img width="100px" height="50px" src="{{asset('imagen/'.$item->imagen)}}" ></td>
                                
                                    <td>
                                    

                                        <a title="ESTADO"   href="{{route('carrera.estado', $item->id)}}">
                                            <lord-icon
                                            src="https://cdn.lordicon.com/ogkflacg.json"
                                            trigger="click"
                                            style="width:30px;height:30px">
                                        </lord-icon>
                                        </a>
                                        <hr>
                                        
                                    <a title="EDITAR"   href="{{route('carrera.edit', $item->id)}}">
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
        </div>
            <!-- fin lista cliente -->

              <!-- inicio lista cliente -->
        <div class="mdl-tabs__panel" id="tabListClient2">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                        <thead>
                            <tr>
                            
                                <th>Nombre</th>
                                <th>Cantidad de estudiantes</th>
                                <th>Duracion</th>
                                <th>Imagen</th>
                                <th colspan="2">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carreraD as $item)
                                <tr>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->cantEstudiante}}</td>
                                    <td>{{$item->duracion}} semestres</td>
                                    <td><img width="100px" height="50px" src="{{asset('imagen/'.$item->imagen)}}" ></td>
                                
                                    <td>
                                    

                                        <a title="ESTADO"   href="{{route('carrera.estado', $item->id)}}">
                                            <lord-icon
                                            src="https://cdn.lordicon.com/ogkflacg.json"
                                            trigger="click"
                                            style="width:30px;height:30px">
                                        </lord-icon>
                                  
                            
                                    </td>
                                </tr>
                            @endforeach
                        
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            <!-- fin lista cliente -->
    </div>
</section>

@endsection
