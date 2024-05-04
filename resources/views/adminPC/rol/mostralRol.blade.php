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
                            Rol
                        </div>
                        <div class="full-width panel-content">
                            <form action="{{route('roles.store')}}" method="POST">
                                @csrf
                                <h5 class="text-condensedLight">Datos de Roles</h5>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{old('name')}}" name="name" class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Titulo</label>
                                    @error('name')
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

     


</section>



@endsection
