<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PollController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('loginStore');
Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('/registrasi', [LoginController::class, 'regiStore'])->name('registrasiStore');

// PollController
Route::prefix('poll')->middleware('auth')->group(function(){
    Route::get('/', [PollController::class, 'index'])->name('poll');
    Route::get('/create', [PollController::class, 'create'])->name('poll.create');
    Route::post('/store', [PollController::class, 'store'])->name('poll.store');
    //Ambil unik data
    Route::get('/vote/{id}', [PollController::class, 'vote'])->name('poll.vote');
    Route::post('/vote/{id}', [PollController::class, 'voteStore'])->name('poll.vote');
    Route::get('/delete/{id}', [PollController::class, 'delete'])->name('poll.delete');
    Route::get('/show/{id}', [PollController::class, 'show'])->name('poll.show');
    Route::post('/update/{id}', [PollController::class, 'update'])->name('poll.update');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/about', function(){
    return view('layout.about');
})->name('about');

