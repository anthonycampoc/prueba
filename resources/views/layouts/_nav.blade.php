	<!-- navLateral -->

    <section class="full-width navLateral">
        <div class="full-width navLateral-bg btn-menu"></div>
        <div class="full-width navLateral-body">
            <div class="full-width navLateral-body-logo text-center tittles">
                <i class="zmdi zmdi-close btn-menu"></i>  ITECSUR 
            </div>
            <figure class="full-width" style="height: 77px;">
                <div class="navLateral-body-cl">
                    <img src="{{asset('SFI/assets/img/avatar-male.png')}}" alt="Avatar" class="img-responsive">
                </div>
                <figcaption class="navLateral-body-cr hide-on-tablet">
                    <span>
                        <br>
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
                                <i class="zmdi zmdi-case"></i>
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
                                        <i class="zmdi zmdi-plus"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        INICIO
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="{{route('sobre.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-star-outline"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        SOBRE
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="{{route('cualidad.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-circle-o"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        CUALIDADES
                                    </div>
                                </a>
                            </li>
                         
                            <li class="full-width">
                                <a href="{{route('redes.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-globe"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Redes Sociales
                                    </div>
                                </a>
                            </li>

                            <li class="full-width">
                                <a href="{{route('contacto.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-accounts-outline"></i>
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
                                <i class="zmdi zmdi-face"></i>
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
                                        <i class="zmdi zmdi-account"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Usuario
                                    </div>
                                </a>
                            </li>

                            <li class="full-width">
                                <a href="{{route('roles.index')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-account"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Roles
                                    </div>
                                </a>
                            </li>
                    
                            <li class="full-width">
                                <a href="{{route('asesor.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-label"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Asesores
                                    </div>
                                </a>
                            </li>
                    
                            <li class="full-width">
                                <a href="{{route('cliente.index')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-accounts"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Estudiante
                                    </div>
                                </a>
                            </li>

                            <li class="full-width">
                                <a href="{{route('facultad.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-label"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Facultades
                                    </div>
                                </a>
                            </li>

                            <li class="full-width">
                                <a href="{{route('carrera.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-accounts"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Cursos
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="{{route('empresa.create')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-accounts"></i>
                                    </div>
                                    <div class="navLateral-body-cr hide-on-tablet">
                                        Empresas
                                    </div>
                                </a>
                            </li>
                            <li class="full-width">
                                <a href="{{route('matricula.index')}}" class="full-width">
                                    <div class="navLateral-body-cl">
                                        <i class="zmdi zmdi-accounts"></i>
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