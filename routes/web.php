<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminGeneralController;
use App\Http\Controllers\AdminVendedoresController;
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\VendedoresController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\CualidadesController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\FacultadController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\HomeController; // Añadido aquí para evitar la ruta completa más adelante
use App\Http\Controllers\RedesController;
use App\Http\Controllers\SobreController;

Route::get('/', function () {
    return redirect()->route('inicio.index');
});


//RUTAS PANEL DE CONTROL PAGINA WEB
Route::resource('inicio', InicioController::class)->names('inicio');
Route::resource('sobre', SobreController::class)->names('sobre');
Route::resource('cualidad', CualidadesController::class)->names('cualidad');
Route::resource('facultad', FacultadController::class)->names('facultad');
Route::resource('asesor', AsesorController::class)->names('asesor');
Route::resource('contacto', ContactoController::class)->names('contacto');
Route::resource('redes', RedesController::class)->names('redes');
Route::resource('carrera', CursosController::class)->names('carrera');
Route::get('nosotros', [App\Http\Controllers\InicioController::class, 'nosotros'])->name('nosotros');
Route::get('cursos', [App\Http\Controllers\InicioController::class, 'cursos'])->name('cursos');
Route::get('comunicate', [App\Http\Controllers\InicioController::class, 'comunicate'])->name('comunicate');
Route::get('facultadC/{id}', [App\Http\Controllers\InicioController::class, 'facultadC'])->name('facultad');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home'); // Modificado para usar el alias

// Ruta para adminGeneral
Route::get('/adminGeneral', [AdminGeneralController::class, 'index'])->name('adminGeneral');
Route::resource('users', UserController::class)->names('adminGeneral.users');

// Ruta para adminVendedores
Route::get('/adminVendedores', [AdminVendedoresController::class, 'index'])->name('adminVendedores');

// Ruta para vendedores
Route::get('/vendedores', [VendedoresController::class, 'index'])->name('vendedores');

Route::resource('clientes', ClienteController::class)->names('cliente');


