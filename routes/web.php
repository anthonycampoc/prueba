<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CualidadesController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\HomeController; // Añadido aquí para evitar la ruta completa más adelante
use App\Http\Controllers\RedesController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;

Route::get('/', function () {
    return redirect()->route('index');
});


//RUTAS PANEL DE CONTROL PAGINA WEB
Route::resource('inicio', InicioController::class)->names('inicio')->middleware('auth');
Route::resource('sobre', SobreController::class)->names('sobre')->middleware('auth');
Route::resource('cualidad', CualidadesController::class)->names('cualidad')->middleware('auth');
Route::resource('contacto', ContactoController::class)->names('contacto')->middleware('auth');
Route::resource('redes', RedesController::class)->names('redes')->middleware('auth');

//RUTAS ADMINISTRATIVAS
Route::resource('clientes', ClienteController::class)->names('cliente')->middleware('auth');;
Route::resource('facultad', FacultadController::class)->names('facultad')->middleware('auth');;
Route::resource('carrera', CursosController::class)->names('carrera')->middleware('auth');;
Route::resource('asesor', AsesorController::class)->names('asesor')->middleware('auth');;
Route::resource('empresa', EmpresaController::class)->names('empresa')->middleware('auth');;
Route::resource('matricula', MatriculaController::class)->names('matricula')->middleware('auth');;
Route::resource('rol', RolController::class)->names('roles')->middleware('auth');;
Route::get('EmpresaAsesor', [App\Http\Controllers\MatriculaController::class, 'EmpresaAsesor'])->name('EmpresaAsesor')->middleware('auth');;
Route::get('AsesorCliente', [App\Http\Controllers\MatriculaController::class, 'AsesorCliente'])->name('AsesorCliente')->middleware('auth');;
Route::get('CarreraCliente', [App\Http\Controllers\MatriculaController::class, 'CarreraCliente'])->name('CarreraCliente')->middleware('auth');;
Route::get('Download/{id}', [App\Http\Controllers\MatriculaController::class, 'Download'])->name('Download')->middleware('auth');;
Route::get('Ruc', [App\Http\Controllers\MatriculaController::class, 'Ruc'])->name('Ruc');
Route::get('CantonCliente', [App\Http\Controllers\ClienteController::class, 'CantonCliente'])->name('CantonCliente')->middleware('auth');;
//RUTAS DE ESTADOS 
Route::get('estadoInico/{id}', [App\Http\Controllers\InicioController::class, 'EstadoIncio'])->name('inicio.estado')->middleware('auth');;
Route::get('EstadoCualidad/{id}', [App\Http\Controllers\CualidadesController::class, 'EstadoCualidad'])->name('cualidad.estado')->middleware('auth');;
Route::get('EstadoRedes/{id}', [App\Http\Controllers\RedesController::class, 'EstadoRedes'])->name('redes.estado')->middleware('auth');;
Route::get('EstadoRedes/{id}', [App\Http\Controllers\RedesController::class, 'EstadoRedes'])->name('redes.estado')->middleware('auth');;
Route::get('EstadoAsesor/{id}', [App\Http\Controllers\AsesorController::class, 'EstadoAsesor'])->name('asesor.estado')->middleware('auth');;
Route::get('EstadoFacultad/{id}', [App\Http\Controllers\FacultadController::class, 'EstadoFacultad'])->name('facultad.estado')->middleware('auth');;
Route::get('EstadoCarrera/{id}', [App\Http\Controllers\CursosController::class, 'EstadoCarrera'])->name('carrera.estado')->middleware('auth');;
Route::get('EstadoEmpresa/{id}', [App\Http\Controllers\EmpresaController::class, 'EstadoEmpresa'])->name('empresa.estado')->middleware('auth');;
Route::get('EstadoCarrera/{id}', [App\Http\Controllers\CursosController::class, 'EstadoCarrera'])->name('carrera.estado')->middleware('auth');;

//RUTAS PAGINA WEB
Route::get('inicio', [App\Http\Controllers\PaginaController::class, 'index'])->name('index');
Route::get('nosotros', [App\Http\Controllers\PaginaController::class, 'nosotros'])->name('nosotros');
Route::get('cursos', [App\Http\Controllers\PaginaController::class, 'cursos'])->name('cursos');
Route::get('comunicate', [App\Http\Controllers\PaginaController::class, 'comunicate'])->name('comunicate');
Route::get('facultadC/{id}', [App\Http\Controllers\PaginaController::class, 'facultadC'])->name('facultad');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home'); // Modificado para usar el alias

// Ruta para adminGeneral

Route::resource('users', UserController::class)->names('users');






