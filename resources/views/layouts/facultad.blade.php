<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>itecsurcosta</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('page/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('page/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('page/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('page/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('page/css/style.css')}}" rel="stylesheet">
    @yield('inicio')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('layouts._navP')
    <!-- Navbar End -->
 <!-- Header Start -->
 <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Facultad</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="{{route('inicio.index')}}">Inicio</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Facultad</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

  <!-- Courses Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Facultad</h6>
           @foreach ($nombre as $item)
                <h1 class="mb-5">{{$item->titulo}}</h1>
           @endforeach 
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($facultadc as $item)
          
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('imagen/'.$item->imagen)}}" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                      
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                       
                        <h5 class="mb-4">{{$item->nombre}}</h5>
               
                   
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>{{$item->duracion}} Semestre</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>{{$item->cantEstudiante}} Estudiantes</small>
                    </div>
                </div>
            </div>
            @endforeach
           
          
        </div>
    </div>
</div>
<!-- Courses End -->


 



        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Enlaces </h4>
                    <a class="btn btn-link" href="{{ route('nosotros') }}">Sobre Nosotros</a>
                    <a class="btn btn-link" href="{{ route('cursos') }}">Cursos</a>
                    <a class="btn btn-link" href="{{ route('comunicate') }}">Contacto</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$contacto->direccion}}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$contacto->telefono}}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$contacto->correo}}</p>
                    <div class="d-flex pt-2">
                        @foreach ($redes as $item)
                        <a class="btn btn-outline-light btn-social" href="{{$item->link}}"><i class="{{$item->icono}}"></i></a>
                        @endforeach
                    </div>
                </div>
              
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="{{ route('inicio.index') }}">ITECSURCOSTA</a>, DERECHOS REVERSADOS.
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('page/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('page/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('page/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('page/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('page/js/main.js')}}"></script>
</body>

</html>