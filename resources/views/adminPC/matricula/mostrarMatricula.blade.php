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
                            Matricula
                        </div>
                        <div class="full-width panel-content">
                            <form action="{{route('matricula.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h5 class="text-condensedLight">Datos Matricula</h5>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <label class="text-condensedLight" for="emailClient">Ingrese PDF</label>
                                    <input name="pdf" class="mdl-textfield__input" type="file"  id="NameClient">
                                    @error('pdf')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>


                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="empresa_id" id="empresa_select" class="mdl-textfield__input">
                                        <option  selected >Seleccione la Empresa</option>

                                        @foreach ($empresa as $item)
                                                <option value="{{$item->id}}">{{$item->nombre}}</option>
                                               
                                        @endforeach
                                        @error('empresa_id')
                                            <p style="color: red;">{{$message}}</p>
                                        @enderror
                                       
                                    </select>
                                    
                                </div>

                                
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input placeholder="Ruc" disabled id="ruc" class="mdl-textfield__input" type="text" id="emailClient" >
                                </div>

                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="asesor_id" id="asesor_select" class="mdl-textfield__input">
                                        <option selected >Seleccione el accesor</option>
                                     
                                    </select>
                                    @error('asesor_id')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="cliente_id" id="cliente_select" class="mdl-textfield__input">
                                        <option  >Seleccione el estudiante</option>
                                      
                                    </select>
                                    @error('cliente_id')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input placeholder="Carrera" disabled id="nombreCarrera" class="mdl-textfield__input" type="text" id="emailClient" >

                            
                                </div>

                                    <input id="carreraid" name="carrera_id" class="mdl-textfield__input" type="hidden" id="emailClient">
                         

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <label class="text-condensedLight" for="emailClient">Ingrese fecha matricula</label>
                                    <input  name="fecha_matricula" class="mdl-textfield__input" type="date" id="emailClient">
                                    @error('fecha_matricula')
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
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                    <table id="example" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                        <thead>
                            <tr>
                            
                                <th>Empresa</th>
                                <th>Asesor</th>
                                <th>Cliente</th>
                                <th>Carrera</th>
                                <th>PDF</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($matricula as $item)
                                <tr>
                                    <td>{{$item->empresa}}</td>
                                    <td>{{$item->asesor}}</td>
                                    <td>{{$item->cliente}}</td>
                                    <td>{{$item->carrera}}</td>
                                    <td>

                                        <a href="{{route('Download',$item->id)}}">
                                            <lord-icon
                                            src="https://cdn.lordicon.com/slmechys.json"
                                            trigger="click"
                                            style="width:50px;height:50px">
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
    </div>
</section>

@endsection
