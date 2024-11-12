<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\comentarioController;
use App\Http\Controllers\megustaController;
use App\Http\Controllers\eventoController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\grupoController;
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

Route::get('/crearPost', function () {return view('crearpost');})
    -> middleware(Autenticacion::class);
Route::post('/crearPost', [postController::class, 'Crear'])
->middleware(Autenticacion::class);
Route::get('/modificarPost/{d}', [postController::class, 'MostrarFormularioDeModificar'])
    ->middleware(Autenticacion::class);
Route::post('/modificarPost', [postController::class, 'Modificar'])
    ->middleware(Autenticacion::class);
Route::get('/listarPost', [postController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarPost/{d}', [postController::class, 'Eliminar'])
    ->middleware(Autenticacion::class);



Route::get('/crearComentario', function () {return view('crearComentario');})
    -> middleware(Autenticacion::class);
Route::post('/crearComentario', [comentarioController::class, 'Crear'])
    ->middleware(Autenticacion::class);
Route::get('/modificarComentario/{d}', [comentarioController::class, 'MostrarFormularioDeModificar'])
    ->middleware(Autenticacion::class);
Route::post('/modificarComentario', [comentarioController::class, 'Modificar'])
    ->middleware(Autenticacion::class);    
Route::get('/listarComentario', [comentarioController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarComentario/{d}', [comentarioController::class, 'Eliminar'])
    ->middleware(Autenticacion::class);



Route::get('/crearLike', function () {return view('crearLike');})
    -> middleware(Autenticacion::class);
Route::post('/crearLike', [MegustaController::class, 'Crear']);

    Route::get('/modificarLike/{d}', [megustaController::class, 'MostrarFormularioDeModificar'])
    ->middleware(Autenticacion::class);
Route::post('/modificarLike', [megustaController::class, 'Modificar'])
    ->middleware(Autenticacion::class);
Route::get('/listarLike', [megustaController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarLike/{d}', [megustaController::class, 'Eliminar'])
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
Route::post('/crearGrupo', [grupoController::class, 'Crear'])
    ->middleware(Autenticacion::class); 
Route::get('/modificarGrupo/{d}', [grupoController::class, 'MostrarFormularioDeModificar'])
    ->middleware(Autenticacion::class);
Route::post('/modificarGrupo', [grupoController::class, 'Modificar'])
    ->middleware(Autenticacion::class);
    Route::get('/listarGrupo', [grupoController::class, 'ListarTodas'])
    ->middleware(Autenticacion::class);
Route::get('/eliminarGrupo/{d}', [grupoController::class, 'Eliminar'])
    ->middleware(Autenticacion::class);




Route::post("/login", [UserController::class, "Login"]);
Route::get('/logout', [UserController::class, "Logout"]);
Route::get('/login', function () {return view('login');});
Route::get('/', function () {return(redirect("/login"));});