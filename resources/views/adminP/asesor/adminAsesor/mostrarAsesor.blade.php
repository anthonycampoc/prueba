@extends('layouts.admin')

@section('content')

<section class="full-width pageContent">
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
                <a href="#tabNewClient" class="mdl-tabs__tab is-active">Activados</a>
                <a href="#tabListClient2" class="mdl-tabs__tab">Desactivados</a>
            
         
        </div>
        <div class="mdl-tabs__panel is-active" id="tabNewClient">
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
