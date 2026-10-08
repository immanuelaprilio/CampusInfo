<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArchitectureController;

Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/program-studi', [PageController::class, 'programStudi'])
    ->name('program');

Route::get('/kontak', [PageController::class, 'kontak'])
    ->name('kontak');

Route::get('/architecture', [ArchitectureController::class, 'index'])
    ->name('architecture');

Route::get('/lifecycle', [ArchitectureController::class, 'lifecycle'])
    ->name('lifecycle');

Route::get('/environment', [ArchitectureController::class, 'environment'])
    ->name('environment');