@extends('layouts.admin')

@section('content')

<section class="full-width pageContent">
    <section class="full-width header-well">
        <div class="full-width header-well-icon">
            <i class="zmdi zmdi-accounts"></i>
        </div>
    </section>
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewClient" class="mdl-tabs__tab is-active">Actualizar</a>
      
        </div>
        <div class="mdl-tabs__panel is-active" id="tabNewClient">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            Inicio
                        </div>
                        <div class="full-width panel-content">
                            <form action="{{route('inicio.update', $inicio->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <h5 class="text-condensedLight">Datos Inicio</h5>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    
                                    <input value="{{$inicio->titulo}}" name="titulo" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Titulo</label>
                                    @error('titulo')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{$inicio->subtitulo}}" name="subtitulo" class="mdl-textfield__input" type="text"  id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Subtitulo</label>
                                    @error('subtitulo')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>


                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <textarea name="parrafo" class="mdl-textfield__input"  id="NameClient" cols="30" rows="5">{{$inicio->parrafo}}</textarea>
                                    <label class="mdl-textfield__label" for="NameClient">Parrafo</label>
                                    @error('parrafo')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{$inicio->nombreLink}}" name="nombreLink" class="mdl-textfield__input" type="text"  id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">Nombre Boton</label>
                                    @error('nombreLink')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{$inicio->link}}" name="link" class="mdl-textfield__input" type="text" id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">link</label>
                                    @error('link')
                                        <p style="color: red;">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    <input value="{{$inicio->imagen}}" name="imagen" class="mdl-textfield__input" type="file"  id="NameClient">
                                    <label class="mdl-textfield__label" for="NameClient">imagen</label>
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
</section>



@endsection
