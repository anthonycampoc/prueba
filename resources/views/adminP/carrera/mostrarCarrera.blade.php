@extends('layouts.admin')

@section('content')

<section class="full-width pageContent">
    <section class="full-width header-well">
        <div class="full-width header-well-icon">
            <i class="zmdi zmdi-accounts"></i>
        </div>
        <div class="full-width header-well-text">
            <p class="text-condensedLight">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aut nulla accusantium minus corporis accusamus fuga harum natus molestias necessitatibus.
            </p>
        </div>
    </section>
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
                            <form action="{{route('carrera.store')}}" method="POST">
                                @csrf
                                <h5 class="text-condensedLight">Datos Asesor</h5>

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
                                    <input value="{{old('imagen')}}" name="imagen" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese imagen</label>
                                    @error('imagen')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>
                                
                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="facultad_id" class="mdl-textfield__input">
                                        <option value="" disabled="" selected="">Facultad</option>

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
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-success text-center tittles">
                            Lista Sobre
                        </div>
                        <div class="full-width panel-content">
                            <form action="#">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                    <label class="mdl-button mdl-js-button mdl-button--icon" for="searchClient">
                                        <i class="zmdi zmdi-search"></i>
                                    </label>
                                    <div class="mdl-textfield__expandable-holder">
                                        <input class="mdl-textfield__input" type="text" id="searchClient">
                                        <label class="mdl-textfield__label"></label>
                                    </div>
                                </div>
                            </form>
                            <div class="mdl-list">
                                @foreach ($carrera as $item)
                                    <div class="mdl-list__item mdl-list__item--two-line">
                                        <span class="mdl-list__item-primary-content">
                                            <i class="zmdi zmdi-account mdl-list__item-avatar"></i>
                                            <span>{{$item->nombre}}</span>
                                            <span class="mdl-list__item-sub-title">{{$item->duracion}}</span>
                                        </span>
                                        <a class="mdl-list__item-secondary-action" href="#!"><i class="zmdi zmdi-more"></i></a>
                                    </div>
                                    <li class="full-width divider-menu-h"></li>
                                @endforeach
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- fin lista cliente -->
    </div>
</section>

@endsection
