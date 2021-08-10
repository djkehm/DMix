<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SolicitudesDJController;
use App\Http\Controllers\SolicitudMIXController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas controlador solicitud Dj
Route::get("solicitud_djs/get", [SolicitudesDJController::class, "getSolicitudesDJ"]);
Route::post("solicitud_djs/post", [SolicitudesDJController::class,"crearSolicitudDJ"]);
Route::post("solicitud_djs/actualizar", [SolicitudesDJController::class,"actualizarSolicitudDJ"]);
Route::post("solicitud_djs/delete", [SolicitudesDJController::class,"eliminarSolicitudDJ"]);

//Rutas controlador solicitud Mix

Route::get("solicitud_mix/get", [SolicitudMIXController::class, "getSolicitudesMIX"]);
Route::post("solicitud_mix/post", [SolicitudMIXController::class,"crearSolicitudMIX"]);
Route::post("solicitud_mix/actualizar", [SolicitudMIXController::class,"actualizarSolicitudMIX"]);
Route::post("solicitud_mix/delete", [SolicitudMIXController::class,"eliminarSolicitudMIX"]);