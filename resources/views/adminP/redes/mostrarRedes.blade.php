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
                            Redes Sociales
                        </div>
                        <div class="full-width panel-content">
                            <form action="{{route('redes.store')}}" method="POST">
                                @csrf
                                <h5 class="text-condensedLight">Datos Redes Sociales</h5>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{old('nombre')}}" name="nombre" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Nombre</label>
                                    @error('nombre')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{old('link')}}" name="link" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Enlace de red social</label>
                                    @error('link')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{old('icono')}}" name="icono" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Icono</label>
                                    @error('icono')
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

        <div class="mdl-tabs__panel" id="tabListClient">
            <div class="full-width divider-menu-h"></div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Enlace de red social</th>
                                <th>Icono</th>
                                <th colspan="2">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($redesA as $item)
                                <tr>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->link}}</td>
                                    <td>{{$item->icono}}</td>
                                    <td>
                                        <a title="ESTADO"  href="{{route('redes.estado', $item->id)}}">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/ogkflacg.json"
                                                trigger="click"
                                                style="width:30px;height:30px">
                                            </lord-icon>
                                        </a>
                                        <hr>
                                        
                                    <a title="EDITAR"  href="{{route('redes.edit', $item->id)}}">
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
                    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Enlace de red social</th>
                                <th>Icono</th>
                                <th colspan="2">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($redesD as $item)
                                <tr>
                                    <td>{{$item->nombre}}</td>
                                    <td>{{$item->link}}</td>
                                    <td>{{$item->icono}}</td>
                                    <td>
                                        <a title="ESTADO"  href="{{route('redes.estado', $item->id)}}">
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