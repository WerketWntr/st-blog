<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PasswordResetController;
use Illuminate\Support\Facades\Route;


// User
Route::get('/profile', [\App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::get('/create', [\App\Http\Controllers\UserController::class, 'create'])->name('create');
Route::delete('/profile/{user}', [\App\Http\Controllers\UserController::class, 'deleteProfile'])->name('deleteProfile');


//Posts

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [\App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
Route::patch('/posts/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');


Route::get('/', function () {
    return view('dashboard');
})->name('index');


//Auth
Route::middleware('guest')->group(function (){
    Route::get('/registration', [\App\Http\Controllers\AuthUserController::class, 'RegistrationPage'])->name('RegistrationPage');
    Route::post('/registration', [\App\Http\Controllers\AuthUserController::class, 'Registration'])->name('Registration');
    Route::get('/login', [\App\Http\Controllers\AuthUserController::class, 'LoginPage'])->name('LoginPage');
    Route::post('/login', [\App\Http\Controllers\AuthUserController::class, 'Login'])->name('Login');
});

Route::get('/logout', [\App\Http\Controllers\AuthUserController::class, 'Logout'])->name('Logout')->middleware('auth');

Route::get('/404', [\App\Http\Controllers\PostController::class, 'notFound'])->name('notFound');

// Reset password
Route::get('password/reset', [PasswordResetController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/reset', [PasswordResetController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [PasswordResetController::class, 'reset'])->name('password.update');


Route::post('posts/{post}/likes', [LikeController::class, 'store'])->name('likes.store');
Route::delete('posts/{post}/likes', [LikeController::class, 'destroy'])->name('likes.destroy');

Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::delete('posts/{post}/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

