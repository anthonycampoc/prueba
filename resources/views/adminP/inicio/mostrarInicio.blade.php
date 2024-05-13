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
                            Inicio
                        </div>
                        <div class="full-width panel-content">
                            <form action="{{route('inicio.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h5 class="text-condensedLight">Datos Inicio</h5>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{old('titulo')}}" name="titulo" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Titulo</label>
                                    @error('titulo')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input value="{{old('subtitulo')}}" name="subtitulo" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Subtitulo</label>
                                    @error('subtitulo')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input value="{{old('parrafo')}}" name="parrafo" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Parrafo</label>
                                    @error('parrafo')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input value="{{old('nombreLink')}}" name="nombreLink" class="mdl-textfield__input" type="text" id="NameClient">

                                    <label class="mdl-textfield__label" for="NameClient">Nombre Boton</label>
                                    @error('nombreLink')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input value="{{old('link')}}" name="link" class="mdl-textfield__input" type="text" id="NameClient">>
                                    <label class="mdl-textfield__label" for="NameClient">link</label>
                                    @error('link')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input value="{{old('imagen')}}" name="imagen" class="mdl-textfield__input" type="text" id="NameClient">>
                                    
                                    <label class="mdl-textfield__label" for="NameClient">imagen</label>
                                    @error('imagen')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
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
            <div class="full-width divider-menu-h"></div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                        <thead>
                            <tr>
                            
                                <th>Titulo</th>
                                <th>subtitulo</th>
                                <th>Parrafo</th>
                                <th>NombreLink</th>
                                <th>Link</th>
                                <th>Imagen</th>
                                <th colspan="2">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inicioA as $item)
                                <tr>
                                    <td>{{$item->titulo}}</td>
                                    <td>{{$item->subtitulo}}</td>
                                    <td><textarea disabled cols="30" rows="5">{{$item->parrafo}}</textarea></td>
                                    <td>{{$item->nombreLink}}</td>
                                    <td>{{$item->link}}</td>
                                    <td><img width="100px" height="50px" src="{{asset('imagen/'.$item->imagen)}}" ></td>
                                
                                    <td>
                                    

                                        <a title="ESTADO"  class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" href="{{route('inicio.estado', $item->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                <rect width="24" height="24" fill="none" />
                                                <path fill="black" d="M21 10.12h-6.78l2.74-2.82c-2.73-2.7-7.15-2.8-9.88-.1a6.887 6.887 0 0 0 0 9.8c2.73 2.7 7.15 2.7 9.88 0c1.36-1.35 2.04-2.92 2.04-4.9h2c0 1.98-.88 4.55-2.64 6.29c-3.51 3.48-9.21 3.48-12.72 0c-3.5-3.47-3.53-9.11-.02-12.58a8.987 8.987 0 0 1 12.65 0L21 3zM12.5 8v4.25l3.5 2.08l-.72 1.21L11 13V8z" />
                                            </svg>
                                        </a>
                                        <hr>
                                        
                                    <a title="EDITAR"  class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" href="{{route('inicio.edit', $item->id)}}">
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
                            
                                <th>Titulo</th>
                                <th>subtitulo</th>
                                <th>Parrafo</th>
                                <th>NombreLink</th>
                                <th>Link</th>
                                <th>Imagen</th>
                                <th colspan="2">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inicioD as $item)
                                <tr>
                                    <td>{{$item->titulo}}</td>
                                    <td>{{$item->subtitulo}}</td>
                                    <td><textarea disabled cols="30" rows="5">{{$item->parrafo}}</textarea></td>
                                    <td>{{$item->nombreLink}}</td>
                                    <td>{{$item->link}}</td>
                                    <td><img width="100px" height="50px" src="{{asset('imagen/'.$item->imagen)}}" ></td>
                                
                                    <td>
                                    

                                        <a title="ESTADO"  class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" href="{{route('inicio.estado', $item->id)}}">
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
</section>



@endsection
