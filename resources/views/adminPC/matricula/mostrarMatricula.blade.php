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
                            Matricula
                        </div>
                        <div class="full-width panel-content">
                            <form action="{{route('matricula.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h5 class="text-condensedLight">Datos Matricula</h5>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="empresa_id" id="empresa_select" class="mdl-textfield__input">
                                        <option value="" disabled="" selected="">Seleccione la Empresa</option>

                                        @foreach ($empresa as $item)
                                                <option value="{{$item->id}}">{{$item->nombre}}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="asesor_id" id="asesor_select" class="mdl-textfield__input">
                                        <option value="" disabled="" selected="">Seleccione el accesor</option>
                                    </select>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield">
                                    <select name="cliente_id" id="cliente_select" class="mdl-textfield__input">
                                        <option value="" disabled="" selected="">Seleccione el estudiante</option>
                                    </select>
                                </div>

                              

                                
                                
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input disabled id="nombreCarrera" class="mdl-textfield__input" type="text" id="emailClient" >
                                    <span class="mdl-textfield__error">Invalid E-mail</span>
                                </div>

                                <input type="hidden" id="carreraid" name="carrera_id">

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input name="fecha_matricula" class="mdl-textfield__input" type="date" id="emailClient">
                                    <label class="mdl-textfield__label" for="emailClient">Ingrese fecha matricula</label>
                                    <span class="mdl-textfield__error">Invalid E-mail</span>
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input name="pdf" class="mdl-textfield__input" type="file"  id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Ingrese PDF</label>
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
                            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                                <thead>
                                    <tr>
                                        <th class="mdl-data-table__cell--non-numeric">Name</th>
                                        <th>Code</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Product Name</td>
                                        <td>Product Code</td>
                                        <td>7</td>
                                        <td>$77</td>
                                        <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Product Name</td>
                                        <td>Product Code</td>
                                        <td>7</td>
                                        <td>$77</td>
                                        <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Product Name</td>
                                        <td>Product Code</td>
                                        <td>7</td>
                                        <td>$77</td>
                                        <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Product Name</td>
                                        <td>Product Code</td>
                                        <td>7</td>
                                        <td>$77</td>
                                        <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Product Name</td>
                                        <td>Product Code</td>
                                        <td>7</td>
                                        <td>$77</td>
                                        <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Product Name</td>
                                        <td>Product Code</td>
                                        <td>7</td>
                                        <td>$77</td>
                                        <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">Product Name</td>
                                        <td>Product Code</td>
                                        <td>7</td>
                                        <td>$77</td>
                                        <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- fin lista cliente -->
    </div>
</section>

@endsection
