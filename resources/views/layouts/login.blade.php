<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
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
</head>
<body class="cover">
	<div class="container-login">
		<p class="text-center" style="font-size: 80px;">
			<i class="zmdi zmdi-account-circle"></i>
		</p>
		<p class="text-center text-condensedLight">Iniciar Seccion</p>
        @yield('content')
		
	</div>
</body>
</html>