<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;

Route::get('/carros', [CarroController::class, 'index'])->name('carros.index');
