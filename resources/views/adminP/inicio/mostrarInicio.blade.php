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
                            Inicio
                        </div>
                        <div class="full-width panel-content">
                            <form action="{{route('inicio.store')}}" method="POST">
                                @csrf
                                <h5 class="text-condensedLight">Datos Inicio</h5>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input name="titulo" class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Titulo</label>
                                    <span class="mdl-textfield__error">Invalid name</span>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input name="subtitulo" class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Subtitulo</label>
                                    <span class="mdl-textfield__error">Invalid name</span>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input name="parrafo" class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Parrafo</label>
                                    <span class="mdl-textfield__error">Invalid name</span>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input name="nombreLink" class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Nombre Boton</label>
                                    <span class="mdl-textfield__error">Invalid name</span>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input name="link" class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">link</label>
                                    <span class="mdl-textfield__error">Invalid name</span>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input name="imagen" class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">imagen</label>
                                    <span class="mdl-textfield__error">Invalid name</span>
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
                            Lista Inicio
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
                                @foreach ($inicio as $item)
                                    <div class="mdl-list__item mdl-list__item--two-line">
                                        <span class="mdl-list__item-primary-content">
                                            <i class="zmdi zmdi-account mdl-list__item-avatar"></i>
                                            <span>{{$item->titulo}}</span>
                                            <span class="mdl-list__item-sub-title">{{$item->subtitulo}}</span>
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
