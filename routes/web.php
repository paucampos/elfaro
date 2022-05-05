<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/contacto',  [PagesController::class, 'contacto'])->name('contacto');

Route::get('/categorias/deporte', [PagesController::class, 'deporte'])->name('deporte');

Route::get('/categorias/negocios', [PagesController::class, 'negocios'])->name('negocios');