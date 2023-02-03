<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
// index
Route::get('/', [MainController::class, 'home']) 
-> name('home');

// show
Route::get('/santo/show/{id}', [MainController::class, 'santoShow'])
-> name('santo.show');

// --- DELETE
Route :: get('/santo/destroy/{id}', [MainController :: class, 'santoDestroy']) 
    -> name('santo.destroy');