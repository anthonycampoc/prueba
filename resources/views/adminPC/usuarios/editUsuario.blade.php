@extends('layouts.admin')

@section('content')

<section class="full-width pageContent">
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewAdmin" class="mdl-tabs__tab is-active">Roles</a>
        </div>
        <div class="mdl-tabs__panel is-active" id="tabNewAdmin">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            Actualizar Rol
                        </div>
                        <div class="full-width panel-content">
                     
                                <div class="mdl-grid">
                               
                                    <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
                                        <h5 class="text-condensedLight">Detalle de Usuario</h5>
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input value="{{$users->name}}" class="mdl-textfield__input" disabled type="text" id="UserNameAdmin">
                                        
                                         
                                        </div>
                                        <h5 class="text-condensedLight">Lista de Roles</h5>

                                       {!!Form::model($users,['route'=>['users.update', $users], 'method' => 'put'])!!}
                                            @foreach ($roles as $item)
                                                <div>
                                                    <label  class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                                                        {!!Form::checkbox('roles[]', $item->id, null,['class'=>'mdl-radio__button'])!!}
                                                        <span class="mdl-radio__label">{{$item->name}}</span>
                                                    </label>
                                                    <br><br>
                                                </div>
                                            @endforeach

                                            <p class="text-center">
                                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addAdmin">
                                                    <i class="zmdi zmdi-plus"></i>
                                                </button>
                                                <div class="mdl-tooltip" for="btn-addAdmin">Actualizar Rol</div>
                                            </p>
                                       {!!Form::close()!!}
                                       
                                    </div>
                                </div>
                             
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</section>



@endsection
