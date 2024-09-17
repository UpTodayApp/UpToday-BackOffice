<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\MegustaController;
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

Route::get('/', [PostController::class, 'ListarTodas']);
Route::get('/listarPost', [PostController::class, 'ListarTodas']);
Route::get('/post/{d}', [PostController::class, 'ListarUna']);
Route::post('/crearPost', [PostController::class, 'Crear']);
Route::get('/eliminarPost/{d}', [PostController::class, 'Eliminar']);


Route::get('/listarComentario', [ComentarioController::class, 'ListarTodas']);
Route::get('/eliminarComentario/{d}', [ComentarioController::class, 'Eliminar']);

Route::get('/listarLike', [MegustaController::class, 'ListarTodas']);
Route::get('/eliminarLike/{d}', [MegustaController::class, 'Eliminar']);

Route::get('/listarEvento', [eventoController::class, 'ListarTodas']);
Route::get('/eliminarEvento/{d}', [eventoController::class, 'Eliminar']);

Route::get('/listarUsuario', [usuarioController::class, 'ListarTodas']);
Route::get('/eliminarUsuario/{d}', [usuarioController::class, 'Eliminar']);
