<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::middleware('auth:api')->group(function () {
    // Tus rutas protegidas aquí

    
    // Ejemplo: Obtener información del usuario autenticado
    Route::get('/user', function () {
        return auth()->user();
    });

    // Ejemplo: Logout (revocar token de acceso)
    Route::post('/logout', 'Auth\LoginController@logout');
});

// Rutas públicas que no requieren autenticación

// Ejemplo: Registro de usuario
Route::post('/register', 'Auth\RegisterController@register');

// Ejemplo: Inicio de sesión
Route::post('/login', 'Auth\LoginController@login');