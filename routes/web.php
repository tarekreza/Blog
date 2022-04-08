<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// to welcome page
Route::get('/',[WelcomeController::class,'index']);
// to blog page
Route::get('/blog',[BlogController::class,'index']);
//to single blog post
Route::get('/blog/single-blog-post',[BlogController::class,'show']);
//to about page
Route::get('/about', function(){
    return view('about');
});
//to contact page
Route::get('/contact',[ContactController::class,'index']);


