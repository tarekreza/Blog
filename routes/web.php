<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// to welcome page
Route::get('/',[WelcomeController::class,'index'])->name('welcome.index');
// to blog page
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
// to create blog post
Route::get('/blog/create',[BlogController::class,'create'])->name('blog.create')->middleware('auth');
// to store blog post
Route::post('/blog',[BlogController::class,'store'])->name('blog.store');
//to single blog post
Route::get('/blog/{post:slug}',[BlogController::class,'show'])->name('blog.show');
//to edit single blog post
Route::get('/blog/{post}/edit',[BlogController::class,'edit'])->name('blog.edit');
//to update single blog post
Route::put('/blog/{post}',[BlogController::class,'update'])->name('blog.update');
//to delete single blog post
Route::delete('/blog/{post}',[BlogController::class,'destroy'])->name('blog.destroy');
//to about page
Route::get('/about', function(){
    return view('about');
})->name('about');
//to contact page
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
//to store contact page
Route::post('/contact',[ContactController::class,'store'])->name('contact.store');

// category resource controller
Route::resource('/categories',CategoryController::class);


//to dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
