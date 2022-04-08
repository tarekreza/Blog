<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// to welcome page
Route::get('/',[WelcomeController::class,'index'])->name('welcome.index');
// to blog page
Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
//to single blog post
Route::get('/blog/single-blog-post',[BlogController::class,'show'])->name('blog.show');
//to about page
Route::get('/about', function(){
    return view('about');
})->name('about');
//to contact page
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');


