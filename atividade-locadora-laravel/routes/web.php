<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AluguelController;


Route::get('', [CarroController::class, 'index'])->name('carros.index');
Route::get('/carros', [CarroController::class, 'index'])->name('carros.index');
Route::get('/carros/create', [CarroController::class, 'create'])->name('carros.create');
Route::post('/carros', [CarroController::class, 'store'])->name('carros.store');
Route::get('/carros/{id}', [CarroController::class, 'show'])->name('carros.show');
Route::get('/carros/edit', [CarroController::class, 'edit'])->name('carros.edit');
Route::put('/carros/{id}', [CarroController::class, 'update'])->name('carros.update');

Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');

Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{id}', [ClienteController::class, 'show'])->name('clientes.show');
Route::get('/clientes/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

Route::get('/aluguels', [AluguelController::class, 'index'])->name('aluguels.index');
Route::get('/aluguels/create', [AluguelController::class, 'create'])->name('aluguels.create');
Route::post('/aluguels', [AluguelController::class, 'store'])->name('aluguels.store');
Route::get('/aluguels/{id}', [AluguelController::class, 'show'])->name('aluguels.show');
Route::get('/aluguels/{id}/edit', [AluguelController::class, 'edit'])->name('aluguels.edit');
Route::put('/aluguels/{aluguel}', [AluguelController::class, 'update'])->name('aluguels.update');
Route::delete('/aluguels/{aluguel}', [AluguelController::class, 'destroy'])->name('aluguels.destroy');
