<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Producto\FormularioProductos;
use App\Http\Controllers\Auth\RegisteredUserController;


Route::get('/login', Login::class)->name('login');
Route::get('/', Login::class)->name('login');
Route::get('/register', Register::class, 'create')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Ruta protegida
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', \App\Livewire\Talleres\Index::class)->name('dashboard');
});