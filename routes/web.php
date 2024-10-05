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

Route::get('/crearPost', function () {return view('crearPost');})
    -> middleware(Autenticacion::class);
Route::post('/crearPost', [PostController::class, 'Crear'])
    ->middleware(Autenticacion::class);
Route::get('/modificarPost/{d}', [PostController::class, 'MostrarFormularioDeModificar'])
    ->middleware(Autenticacion::class);
Route::post('/modificarPost', [PostController::class, 'Modificar'])
    ->middleware(Autenticacion::class);
Route::get('/listarPost', [PostController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarPost/{d}', [PostController::class, 'Eliminar'])
    ->middleware(Autenticacion::class);



Route::get('/crearComentario', function () {return view('crearComentario');})
    -> middleware(Autenticacion::class);
Route::post('/crearComentario', [ComentarioController::class, 'Crear'])
    ->middleware(Autenticacion::class);
    Route::get('/modificarComentario/{d}', [ComentarioController::class, 'MostrarFormularioDeModificar'])
    ->middleware(Autenticacion::class);
Route::post('/modificarComentario', [ComentarioController::class, 'Modificar'])
    ->middleware(Autenticacion::class);    
Route::get('/listarComentario', [ComentarioController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarComentario/{d}', [ComentarioController::class, 'Eliminar'])
    ->middleware(Autenticacion::class);



Route::get('/crearMegustaPost', function () {return view('crearLikePost');})
    -> middleware(Autenticacion::class);
Route::post('/crearMegustaPost', [MegustaController::class, 'CrearPost']);
Route::get('/crearMegustaComentario', function () {return view('crearLikeComentario');})
    -> middleware(Autenticacion::class);
Route::post('/crearMegustaComentario', [MegustaController::class, 'CrearComentario'])
    ->middleware(Autenticacion::class);
Route::get('/listarLike', [MegustaController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarLike/{d}', [MegustaController::class, 'Eliminar'])
    ->middleware(Autenticacion::class);


Route::get('/crearEvento', function () {return view('crearEvento');})
    -> middleware(Autenticacion::class);
Route::post('/crearEvento', [eventoController::class, 'Crear'])
    ->middleware(Autenticacion::class);
Route::get('/modificarEvento/{d}', [eventoController::class, 'MostrarFormularioDeModificar'])
    ->middleware(Autenticacion::class);
Route::post('/modificarEvento', [eventoController::class, 'Modificar'])
    ->middleware(Autenticacion::class);
Route::get('/listarEvento', [eventoController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarEvento/{d}', [eventoController::class, 'Eliminar'])
    ->middleware(Autenticacion::class);


Route::get('/crearUsuario', function () {return view('crearUsuario');})
    -> middleware(Autenticacion::class);
Route::post('/crearUsuario', [usuarioController::class, 'Crear'])
    ->middleware(Autenticacion::class);
Route::get('/modificarUsuario/{d}', [usuarioController::class, 'MostrarFormularioDeModificar'])
    ->middleware(Autenticacion::class);
Route::post('/modificarUsuario', [usuarioController::class, 'Modificar'])
    ->middleware(Autenticacion::class);
Route::get('/listarUsuario', [usuarioController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarUsuario/{d}', [usuarioController::class, 'Eliminar'])
    ->middleware(Autenticacion::class);

Route::get('/crearGrupo', function () {return view('crearGrupo');})
    -> middleware(Autenticacion::class);
Route::post('/crearGrupo', [GrupoController::class, 'Crear'])
    ->middleware(Autenticacion::class); 
Route::get('/modificarGrupo/{d}', [GrupoController::class, 'MostrarFormularioDeModificar'])
    ->middleware(Autenticacion::class);
Route::post('/modificarGrupo', [GrupoController::class, 'Modificar'])
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
