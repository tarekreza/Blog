<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolePermissionController;

// to welcome page
Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
// to blog page
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
// to create blog post
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
// to store blog post
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
//list of blog post of authenicated user
Route::get('/blog/my-posts', [BlogController::class, 'myPosts'])->name('blog.myPosts')->middleware('auth');
//to single blog post
Route::get('/blog/{post:slug}', [BlogController::class, 'show'])->name('blog.show');
//to edit single blog post
Route::get('/blog/{post}/edit', [BlogController::class, 'edit'])->name('blog.edit');
//to update single blog post
Route::put('/blog/{post}', [BlogController::class, 'update'])->name('blog.update');
//to delete single blog post
Route::delete('/blog/{post}', [BlogController::class, 'destroy'])->name('blog.destroy');

//to store comment
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comment.store')->middleware('auth');
//to delete comment
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy')->middleware('checkCommentOwner');

//to about page
Route::get('/about', function () {
    $title = "About - Tarek's Blog";
    return view('about', compact('title'));
})->name('about');
//to contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
//to store contact page
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware(['auth'])->group(function () {
    // category resource controller
    Route::resource('/categories', CategoryController::class);
    //to assign role to user
    Route::get('/role-permission', [RolePermissionController::class, 'index'])->name('role-permission.index');
    //to show all roles and permissions
    Route::get('/role-permission/show', [RolePermissionController::class, 'create'])->name('role-permission.showAllRolesAndPermissions');
    //to assign permission to role
    Route::post('/role-permission', [RolePermissionController::class, 'store'])->name('role-permission.addPermissionToRole');
    //role permission edit
    Route::get('/role-permission/{role}/edit', [RolePermissionController::class, 'edit'])->name('role-permission.edit');
    //role permission update
    Route::put('/role-permission/{role}', [RolePermissionController::class, 'update'])->name('role-permission.update');
    //role permission delete
    Route::delete('/role-permission/{role}', [RolePermissionController::class, 'destroy'])->name('role-permission.destroy');
    //show all users
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    //create user
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    //store user
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    //edit user
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    //update user
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    //delete user
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    //to dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //to show profile
    Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');
    //to profile
    Route::get('/profile', [ProfileController::class,'edit'])->name('profile');
    //to update profile
    Route::put('/profile', [ProfileController::class,'update'])->name('profile.update');
});

require __DIR__ . '/auth.php';
