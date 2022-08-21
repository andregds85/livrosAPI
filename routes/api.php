<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;


Route::get('livros', [LivroController::class, 'index']);

Route::post('gravar', [LivroController::class, 'store']);

Route::get('mostrar/{id}', [LivroController::class, 'show']); 




