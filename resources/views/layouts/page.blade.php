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


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            @foreach ($inicio as $item)
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('imagen/'.$item->imagen)}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">{{$item->titulo}}</h5>
                                <h1 class="display-3 text-white animated slideInDown">{{$item->subtitulo}}</h1>
                                <p class="fs-5 text-white mb-4 pb-2">{{$item->parrafo}}</p>
                                <a href="{{$item->link}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">{{$item->nombreLink}}</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                @foreach ($cualidad as $item)
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4">
                                <i class="{{$item->imagen}} text-primary mb-4"></i>
                                <h5 class="mb-3">{{$item->titulo}}</h5>
                                <p>{{$item->parrafo1}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 600px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('imagen/'.$sobre->imagen)}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">SOBRE NOSOTROS</h6>
                    <h1 class="mb-4">ITECSUR</h1>
                    <p class="mb-4">{{$sobre->parrafo1}}</p>
                    <p class="mb-4">{{$sobre->parrafo2}}</p>
                   
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{$sobre->link}}">{{$sobre->tituloLink}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Facultades</h6>

                <h1 class="mb-5"> </h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($facultad as $item)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('imagen/'.$item->imagen)}}" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Mas Informacion</a>
                                <a href="{{ route('facultad',$item->id) }}" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Carreras</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4">{{$item->titulo}}</h5>
                        </div>

                        <div class="d-flex border-top">
                            
                        </div>
                      
                    </div>
                </div>
                @endforeach
              
                
                
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Asesores</h6>
                <h1 class="mb-5">Asesores Academicos</h1>
            </div>
            <div class="row g-4">
                @foreach ($asesor as $item)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{asset('imagen/'.$item->imagen)}}" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="{{$item->link}}"><i class="bi bi-whatsapp"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">{{$item->nombre_1}} {{$item->apellido_1}}</h5>
                            
                        </div>
                    </div>
                </div>
                @endforeach
                
               
            </div>
        </div>
    </div>


    <!-- Team End -->



        

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
                        <a class="btn btn-outline-light btn-social" href="{{$item->link}}"><i class="{{$item->icono}} " aria-hidden="true"></i></a>
                        @endforeach
                    </div>
                </div>
               
              
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="{{ route('index') }}">ITECSURCOSTA</a>, DERECHOS REVERSADOS.
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