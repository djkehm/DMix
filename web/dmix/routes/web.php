<?php

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

Route::view("/","home")->name("home");
Route::view("/solicitud_dj","solicitud_dj")->name("solicitud_dj");
Route::view("/solicitud_mix","solicitud_mix")->name("solicitud_mix");
Route::view("/mostrar_solicitudDJ","mostrar_solicitudDJ")->name("mostrar_solicitudDJ");
Route::view("/mostrar_solicitudMIX","mostrar_solicitudMIX")->name("mostrar_solicitudMIX");