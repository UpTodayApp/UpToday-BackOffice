<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\MegustaController;
use App\Http\Controllers\eventoController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Autenticacion;
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

Route::get('/listarPost', [PostController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarPost/{d}', [PostController::class, 'Eliminar'])
    ->middleware(Autenticacion::class);



Route::get('/listarComentario', [ComentarioController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarComentario/{d}', [ComentarioController::class, 'Eliminar'])
    ->middleware(Autenticacion::class);

Route::get('/listarLike', [MegustaController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarLike/{d}', [MegustaController::class, 'Eliminar'])
    ->middleware(Autenticacion::class);

Route::get('/listarEvento', [eventoController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarEvento/{d}', [eventoController::class, 'Eliminar'])
    ->middleware(Autenticacion::class);

Route::get('/listarUsuario', [usuarioController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarUsuario/{d}', [usuarioController::class, 'Eliminar'])
    ->middleware(Autenticacion::class);

Route::get('/listarGrupo', [GrupoController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarGrupo/{d}', [GrupoController::class, 'Eliminar'])
    ->middleware(Autenticacion::class);




Route::post("/login", [UserController::class, "Login"]);
Route::get('/logout', [UserController::class, "Logout"]);
Route::get('/login', function () {
    return view('login');
});
