<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
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

Route::get('/teste', function (Request $request) {
    return response()->json([

        'status' => true,
        'mensagem'=> "lista de usuarios"
    ]);
});

Route::resource('usuarios',UsuarioController::class);
Route::resource('categorias',CategoriaController::class);
Route::resource('livros',LivroController::class);
