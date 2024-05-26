@extends('layouts.admin')

@section('content')

<section class="full-width pageContent">
   
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewAdmin" class="mdl-tabs__tab is-active">Usuarios</a>
    
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


                                            <a title="EDITAR"  href="{{route('users.edit', $item->id)}}">
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
            </div>
        </div>
      
    </div>
</section>



@endsection
