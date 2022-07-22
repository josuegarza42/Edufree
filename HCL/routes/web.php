<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserControllerPdf;

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('category/{category}',[PostController::class,'category'])->name('posts.category');

Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');

Route::get('/users/export/', [UserController::class, 'exportAllUsers'])->name('users.export');

Route::get('download-pdf', [UserController::class, 'downloadPdf'])->name('download-pdf');

// Route::get('/users/export/', [UserController::class, 'exportAllUsers'])->name('users.exportpdf');

//  Route::get('download-pdf', [UserControllerPdf::class, 'downloadPDF'])->name('users.download');








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
