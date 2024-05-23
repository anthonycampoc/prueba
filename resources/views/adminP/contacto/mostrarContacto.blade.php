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
                            Contacto
                        </div>
                        <div class="full-width panel-content">
                            <form action="{{route('contacto.update',$contacto->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <h5 class="text-condensedLight">Datos Contacto</h5>
                                <input value="{{$contacto->id}}" type="hidden" name="id">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{$contacto->direccion}}" name="direccion" class="mdl-textfield__input" type="text"  id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese su direccion</label>
                                    
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{$contacto->telefono}}" name="telefono" class="mdl-textfield__input" type="text"  id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese el telefono</label>
                                    @error('telefono')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                     
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{$contacto->correo}}" name="correo" class="mdl-textfield__input" type="text"  id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese un correo</label>
                                    @error('correo')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                    
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <label class="text-condensedLight" for="NameClient">Inserta una imagen</label>
                                    <input   name="imagen" class="mdl-textfield__input" type="file" id="NameClient">
                                    @error('imagen')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
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
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- fin lista cliente -->
    </div>
</section>

@endsection
