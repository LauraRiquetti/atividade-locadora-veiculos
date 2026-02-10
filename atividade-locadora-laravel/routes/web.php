<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AluguelController;

Route::get('/', [CarroController::class, 'index'])->name('carros.index');
Route::get('/carros', [CarroController::class, 'store'])->name('carros.store');
Route::put('/carros/{carro}', [CarroController::class, 'update'])->name('carros.update');
Route::delete('/carros/{carro}', [CarroController::class, 'destroy'])->name('carros.destroy');

Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

Route::get('/', [AluguelController::class, 'index'])->name('aluguels.index');
Route::get('/aluguels', [AluguelController::class, 'store'])->name('aluguels.store');
Route::put('/aluguels/{aluguel}', [AluguelController::class, 'update'])->name('aluguels.update');
Route::delete('/aluguels/{aluguel}', [AluguelController::class, 'destroy'])->name('aluguels.destroy');