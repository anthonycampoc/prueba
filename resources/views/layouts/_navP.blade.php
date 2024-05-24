 <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('inicio.index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">  <img width="130px" height="70px" src="{{asset('imagen/'.$contacto->imagen)}}" ></h2>

          
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('inicio.index') }}" class="nav-item nav-link">PAGINA PRINCIPAL</a>
                <a href="{{ route('nosotros') }}" class="nav-item nav-link">SOBRE NOSOTROS</a>
                <a href="{{ route('cursos') }}" class="nav-item nav-link">CARRERAS</a>
                <a href="{{ route('comunicate') }}" class="nav-item nav-link">Contacto</a>
            </div>
           
        </div>
    </nav>