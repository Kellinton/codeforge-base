<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SobreController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/servico', [ServicoController::class, 'index'])->name('servico');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
