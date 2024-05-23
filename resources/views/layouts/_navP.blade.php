 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">  <img width="100px" height="50px" src="{{asset('imagen/'.$contacto->imagen)}}" ></h2>

          
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('inicio.index') }}" class="nav-item nav-link">PAGINA PRINCIPAL</a>
                <a href="{{ route('nosotros') }}" class="nav-item nav-link">SOBRE NOSOTROS</a>
                <a href="{{ route('cursos') }}" class="nav-item nav-link">CURSOS</a>
                <a href="{{ route('comunicate') }}" class="nav-item nav-link">Contacto</a>
            </div>
            <a target="_blank" href="{{ route('login') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>