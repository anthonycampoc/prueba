<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminGeneralController;
use App\Http\Controllers\AdminVendedoresController;
use App\Http\Controllers\VendedoresController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InicioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('inicio.index');
});

//Route::get('/', function () {return redirect()->route('login');});

Route::resource('inicio', InicioController::class)->names('inicio');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Ruta para adminGeneral
Route::get('/adminGeneral', [AdminGeneralController::class, 'index'])->name('adminGeneral');

// Ruta para adminVendedores
Route::get('/adminVendedores', [AdminVendedoresController::class, 'index'])->name('adminVendedores');

// Ruta para vendedores
Route::get('/vendedores', [VendedoresController::class, 'index'])->name('vendedores');


Route::resource('clientes', ClienteController::class)->names('cliente');


