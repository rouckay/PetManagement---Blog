<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/{post}', [PostController::class, 'show'])->name('view');
Route::get('/category/{category:slug}', [PostController::class, 'byCategory'])->name('by-category');
