@extends('layouts.admin')

@section('content')

<section class="full-width pageContent">
   
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewAdmin" class="mdl-tabs__tab is-active">Usurios</a>
    
        </div>
        <div class="mdl-tabs__panel is-active" id="tabNewAdmin">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            Lista de usuarios
                        </div>
                        <div class="full-width panel-content">
                            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                                <thead>
                                    <tr>
                                    
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th colspan="2">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach ($users as $item)
                                     <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>


                                            <a title="EDITAR"  class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" href="{{route('users.edit', $item->id)}}">
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
                </div>
            </div>
        </div>
      
    </div>
</section>



@endsection
