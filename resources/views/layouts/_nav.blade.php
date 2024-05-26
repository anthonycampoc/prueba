	<!-- navLateral -->

    <section class="full-width navLateral">
        <div class="full-width navLateral-bg btn-menu"></div>
        <div class="full-width navLateral-body">
            <div class="full-width navLateral-body-logo text-center tittles">
                <a href="{{route('home')}}">
                    <img width="110px" height="55px" class="itecsur" src="{{asset('SFI/assets/img/ITECSURLOGO2.png')}}" >
                </a>
            

             
            </div>
            <figure class="full-width" style="height: 77px;">
                <div class="navLateral-body-cl">
                    <img src="{{asset('SFI/assets/img/avatar-male.png')}}" alt="Avatar" class="img-responsive">
                </div>
                <figcaption class="navLateral-body-cr hide-on-tablet">
                    <span>
                      {{$nombreUsuario}}  <br>
                    </span>
                </figcaption>
            </figure>
            <div class="full-width tittles navLateral-body-tittle-menu">
                <i class="zmdi zmdi-desktop-mac"></i><span class="hide-on-tablet">&nbsp; PANEL DE CONTROL</span>
            </div>
            <nav class="full-width">
                <ul class="full-width list-unstyle menu-principal">
                 

                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <lord-icon
                                    src="https://cdn.lordicon.com/fkaukecx.json"
                                    trigger="loop"
                                    delay="2000"
                                    style="width:20px;height:20px">
                                </lord-icon>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                Administracion Pagina Web
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                            <li class="full-width">
                                <a href="{{route('inicio.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <lord-icon
                                        src="https://cdn.lordicon.com/yixbkspi.json"
                                        trigger="loop"
                                        delay="500"
                                        style="width:20px;height:20px">
                                    </lord-icon>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        INICIO
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="{{route('sobre.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <lord-icon
                                            src="https://cdn.lordicon.com/dupxuoaa.json"
                                            trigger="loop"
                                            delay="500"
                                            style="width:20px;height:20px">
                                        </lord-icon>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        SOBRE
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="{{route('cualidad.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <lord-icon
                                        src="https://cdn.lordicon.com/hcxrqqeo.json"
                                        trigger="loop"
                                        delay="500"
                                        style="width:20px;height:20px">
                                    </lord-icon>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        CUALIDADES
                                    </div>
                                </a>
                            </li>
                         
                            <li class="full-width">
                                <a href="{{route('redes.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <lord-icon
                                        src="https://cdn.lordicon.com/hbzwsetw.json"
                                        trigger="loop"
                                        delay="500"
                                        style="width:20px;height:20px">
                                    </lord-icon>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Redes Sociales
                                    </div>
                                </a>
                            </li>

                            <li class="full-width">
                                <a href="{{route('contacto.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <lord-icon
                                        src="https://cdn.lordicon.com/hrjifpbq.json"
                                        trigger="loop"
                                        delay="500"
                                        style="width:20px;height:20px">
                                    </lord-icon>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Contacto
                                    </div>
                                </a>
                            </li>
                        
                        </ul>

                
                    </li>
                    <li class="full-width divider-menu-h"></li>
                    <li class="full-width">
                        <a href="#!" class="full-width btn-subMenu">
                            <div class="navLateral-body-cl">
                                <lord-icon
                                src="https://cdn.lordicon.com/fkaukecx.json"
                                trigger="loop"
                                delay="2000"
                                style="width:20px;height:20px">
                                </lord-icon>
                            </div>
                            <div class="navLateral-body-cr hide-on-tablet">
                                Administracion Instituto
                            </div>
                            <span class="zmdi zmdi-chevron-left"></span>
                        </a>
                        <ul class="full-width menu-principal sub-menu-options">
                    
                                
                            <li class="full-width">
                                <a href="{{route('users.index')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <lord-icon
                                        src="https://cdn.lordicon.com/ozckswtv.json"
                                        trigger="loop"
                                            delay="500"
                                        style="width:20px;height:20px">
                                    </lord-icon>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Usuario
                                    </div>
                                </a>
                            </li>

                            <li class="full-width">
                                <a href="{{route('roles.index')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <lord-icon
                                            src="https://cdn.lordicon.com/jgnvfzqg.json"
                                            trigger="loop"
                                            delay="500"
                                            style="width:20px;height:20px">
                                        </lord-icon>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Roles
                                    </div>
                                </a>
                            </li>
                    
                            <li class="full-width">
                                <a href="{{route('asesor.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <lord-icon
                                            src="https://cdn.lordicon.com/iazmohzf.json"
                                            trigger="loop"
                                            delay="500"
                                            style="width:20px;height:20px">
                                        </lord-icon>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Asesores
                                    </div>
                                </a>
                            </li>
                            @can('admin.asesor')
                                <li class="full-width">
                                    <a href="{{route('asesor.admin')}}" class="full-width">
                                        <div class="navLateral-body-cl">
                                            <lord-icon
                                                src="https://cdn.lordicon.com/iazmohzf.json"
                                                trigger="loop"
                                                delay="500"
                                                style="width:20px;height:20px">
                                            </lord-icon>
                                        </div>
                                        <div class="navLateral-body-cr hide-on-tablet">
                                            Administrador Asesores
                                        </div>
                                    </a>
                                </li>
                            @endcan
                    
                            <li class="full-width">
                                <a href="{{route('cliente.index')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <lord-icon
                                        src="https://cdn.lordicon.com/hrjifpbq.json"
                                        trigger="loop"
                                        delay="500"
                                        style="width:20px;height:20px">
                                    </lord-icon>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Estudiante
                                    </div>
                                </a>
                            </li>

                            <li class="full-width">
                                <a href="{{route('facultad.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <lord-icon
                                        src="https://cdn.lordicon.com/mjcariee.json"
                                        trigger="loop"
                                        delay="500"
                                        style="width:20px;height:20px">
                                    </lord-icon>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Facultades
                                    </div>
                                </a>
                            </li>

                            <li class="full-width">
                                <a href="{{route('carrera.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <lord-icon
                                            src="https://cdn.lordicon.com/omiqopzf.json"
                                            trigger="loop"
                                            delay="500"
                                            style="width:20px;height:20px">
                                        </lord-icon>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Carrera
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="{{route('empresa.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <lord-icon
                                        src="https://cdn.lordicon.com/wmwqvixz.json"
                                        trigger="loop"
                                        delay="2000"
                                        style="width:20px;height:20px">
                                    </lord-icon>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Empresas
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="{{route('matricula.index')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <lord-icon
                                                        src="https://cdn.lordicon.com/rwtswsap.json"
                                                        trigger="loop"
                                                        delay="500"
                                                        style="width:20px;height:20px">
                                                    </lord-icon>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Matricula
                                    </div>
                                </a>
                            </li>
                 

                            
                        </ul>
                    </li>
                   
                   
                  
                   
                </ul>
            </nav>
        </div>
    </section>