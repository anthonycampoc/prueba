<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('SFI/css/normalize.css')}}">
	<link rel="stylesheet" href="{{asset('SFI/css/sweetalert2.css')}}">
	<link rel="stylesheet" href="{{asset('SFI/css/material.min.css')}}">
	<link rel="stylesheet" href="{{asset('SFI/css/material-design-iconic-font.min.css')}}">
	<link rel="stylesheet" href="{{asset('SFI/css/jquery.mCustomScrollbar.css')}}">
	<link rel="stylesheet" href="{{asset('SFI/css/main.css')}}">


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="{{asset('SFI/js/material.min.js')}}" ></script>
	<script src="{{asset('SFI/js/sweetalert2.min.js')}}" ></script>
	<script src="{{asset('SFI/js/jquery.mCustomScrollbar.concat.min.js')}}" ></script>
	<script src="{{asset('SFI/js/main.js')}}" ></script>
    <script src="{{asset('SFI/js/validacion.js')}}" ></script>

	
</head>
<body>
	<!-- Notifications area -->
<section class="full-width container-notifications">
    <div class="full-width container-notifications-bg btn-Notification"></div>
    <section class="NotificationArea">
        <div class="full-width text-center NotificationArea-title tittles">Notifications <i class="zmdi zmdi-close btn-Notification"></i></div>
        <a href="#" class="Notification" id="notifation-unread-1">
            <div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
            <div class="Notification-text">
                <p>
                    <i class="zmdi zmdi-circle"></i>
                    <strong>New User Registration</strong> 
                    <br>
                    <small>Just Now</small>
                </p>
            </div>
            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-1">Notification as UnRead</div> 
        </a>
        <a href="#" class="Notification" id="notifation-read-1">
            <div class="Notification-icon"><i class="zmdi zmdi-cloud-download bg-primary"></i></div>
            <div class="Notification-text">
                <p>
                    <i class="zmdi zmdi-circle-o"></i>
                    <strong>New Updates</strong> 
                    <br>
                    <small>30 Mins Ago</small>
                </p>
            </div>
            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-1">Notification as Read</div>
        </a>
        <a href="#" class="Notification" id="notifation-unread-2">
            <div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
            <div class="Notification-text">
                <p>
                    <i class="zmdi zmdi-circle"></i>
                    <strong>Archive uploaded</strong> 
                    <br>
                    <small>31 Mins Ago</small>
                </p>
            </div>
            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-2">Notification as UnRead</div>
        </a> 
        <a href="#" class="Notification" id="notifation-read-2">
            <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
            <div class="Notification-text">
                <p>
                    <i class="zmdi zmdi-circle-o"></i>
                    <strong>New Mail</strong> 
                    <br>
                    <small>37 Mins Ago</small>
                </p>
            </div>
            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-2">Notification as Read</div>
        </a>
        <a href="#" class="Notification" id="notifation-read-3">
            <div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
            <div class="Notification-text">
                <p>
                    <i class="zmdi zmdi-circle-o"></i>
                    <strong>Folder delete</strong> 
                    <br>
                    <small>1 hours Ago</small>
                </p>
            </div>
            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-3">Notification as Read</div>
        </a>  
    </section>
</section>
<!-- navBar -->
<div class="full-width navBar">
    <div class="full-width navBar-options">
        <i class="zmdi zmdi-more-vert btn-menu" id="btn-menu"></i>	
        <div class="mdl-tooltip" for="btn-menu">Menu</div>
        <nav class="navBar-options-list">
            <ul class="list-unstyle">
                <li class="btn-Notification" id="notifications">
                    <i class="zmdi zmdi-notifications"></i>
                    <!-- <i class="zmdi zmdi-notifications-active btn-Notification" id="notifications"></i> -->
                    <div class="mdl-tooltip" for="notifications">Notifications</div>
                </li>
                <li class="btn-exit" id="btn-exit">
                    <i class="zmdi zmdi-power"></i>
                    <div class="mdl-tooltip" for="btn-exit">LogOut</div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                
              
                <li class="text-condensedLight noLink" ><small>User Name</small></li>
                <li class="noLink">
                    <figure>
                        <img src="{{asset('SFI/assets/img/avatar-male.png')}}" alt="Avatar" class="img-responsive">
                    </figure>
                </li>
            </ul>
        </nav>
    </div>
</div>
@include('layouts._nav')
<!-- pageContent -->

@yield('content')

<script type="text/javascript">

     $(document).ready(function(){
                    var nombreCarrera = document.getElementById('nombreCarrera');
                    var idCarrera = document.getElementById('carreraid');

     
        //const empresa = document.getElementById('empresa_select');

      /*  empresa.addEventListener('click', function(){
                    var empresa_id = $(this).val();
                    const miSelect = document.getElementById('asesor_select');
                    $.ajax({
                        type: 'get',
                        url:'{!!URL::to('EmpresaAsesor')!!}',
                        data:{'id':empresa_id},
                             success:function(data){
                                console.log(data);
                                    miSelect.innerHTML = '';
                                    //<option id="asesor" value="1">Ms. Asia Klocko III</option>
                               
                                    for (let i = 0; i < data.length; i++) {
                                      const nuevaOpcion = document.createElement('option');
                                      nuevaOpcion.id = "asesor";
                                      nuevaOpcion.value = data[i].id;
                                      nuevaOpcion.textContent = data[i].nombres;
                                      miSelect.appendChild(nuevaOpcion);
                                    }
                                    
                                    const idAsesor = document.getElementById('asesor');
                                    idAsesor.textContent = "Seleccione el accesor";
                                    idAsesor.disabled = true;
                                    
                             },
                             error:function(){}
                    });
        })*/
        $(document).on('change','#empresa_select', function(){
            var empresa_id = $(this).val();
                    const miSelect = document.getElementById('asesor_select');
                    $.ajax({
                        type: 'get',
                        url:'{!!URL::to('EmpresaAsesor')!!}',
                        data:{'id':empresa_id},
                             success:function(data){
                                console.log(data);
                                    miSelect.innerHTML = '';
                                    nombreCarrera.innerHTML = '';
                                    idCarrera.innerHTML = '';
                               
                                    for (let i = 0; i < data.length; i++) {
                                      const nuevaOpcion = document.createElement('option');
                                      nuevaOpcion.value = data[i].id;
                                      nuevaOpcion.textContent = data[i].nombre_1;
                                      miSelect.appendChild(nuevaOpcion);
                                    }
                   
                                    
                             },
                             error:function(){}
                    });
            })

            $(document).on('change','#empresa_select', function(){
                    var empresa_id = $(this).val();
                    const miSelect = document.getElementById('ruc');
                    //const run = document.getElementById('ruc');
                
                    $.ajax({
                        type: 'get',
                        url:'{!!URL::to('Ruc')!!}',
                        data:{'id':empresa_id},
                             success:function(data){
                                console.log(data);
                                miSelect.value = data.ruc;
                            
                             },
                             error:function(){

                             }
                    });
            })

            $(document).on('change','#asesor_select', function(){
                    var asesor_id = $(this).val();
                    const miSelect = document.getElementById('cliente_select');
                    //const run = document.getElementById('ruc');
                
                    $.ajax({
                        type: 'get',
                        url:'{!!URL::to('AsesorCliente')!!}',
                        data:{'id':asesor_id},
                             success:function(data){
                                console.log(data);
                                //const miSelect = document.getElementById('cliente');
                                //miSelect.textContent = ""; // Limpiar el contenido previo del select

                                    miSelect.innerHTML = '';
                                    nombreCarrera.innerHTML = '';
                                    idCarrera.innerHTML = '';
                                    for (let i = 0; i < data.length; i++) {
                                      const nuevaOpcion = document.createElement('option');
                                      nuevaOpcion.value = data[i].id;
                                      nuevaOpcion.textContent = data[i].nombre_1;
                                      miSelect.appendChild(nuevaOpcion);
                                    }

                                  
                             },
                             error:function(){

                             }
                    });
            })

            

            $(document).on('change','#cliente_select', function(){
                    var asesor_id = $(this).val();
              
          
                
                    $.ajax({
                        type: 'get',
                        url:'{!!URL::to('CarreraCliente')!!}',
                        data:{'id':asesor_id},
                             success:function(data){
                                nombreCarrera.innerHTML = '';
                                idCarrera.innerHTML = '';
                                    for (let i = 0; i < data.length; i++) {
                                      idCarrera.value = data[i].id;
                                      nombreCarrera.value = data[i].nombre;
                                    }    
                             },
                             error:function(){

                             }
                    });
            })

            $(document).on('change','#provincia_select', function(){
                    var empresa_id = $(this).val();
                    const miSelect = document.getElementById('canton_select');
                    //const run = document.getElementById('ruc');
                
                    $.ajax({
                        type: 'get',
                        url:'{!!URL::to('CantonCliente')!!}',
                        data:{'id':empresa_id},
                             success:function(data){
                                console.log(data);
                                    miSelect.innerHTML = '';
                                    for (let i = 0; i < data.length; i++) {
                                      const nuevaOpcion = document.createElement('option');
                                      nuevaOpcion.value = data[i].id;
                                      nuevaOpcion.textContent = data[i].nombre;
                                      miSelect.appendChild(nuevaOpcion);
                                    }    
                             },
                             error:function(){

                             }
                    });
            })
     });

</script>

</body>
</html>