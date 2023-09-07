<?php

use App\Http\Controllers\TarefasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TarefasController::class, 'index'] );

Route::post('/', [TarefasController::class, 'store'] );

Route::get('/editar/{id}', [TarefasController::class, 'edit']);

Route::post('/editar/{id}', [TarefasController::class, 'update']);

Route::get('/excluir/{id}', [TarefasController::class, 'delete']);
