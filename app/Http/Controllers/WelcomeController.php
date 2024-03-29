<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->take(4)->get();
        $title = "Home - Tarek's Blog";
        return view('welcome', compact('posts','title'));
    }
}
