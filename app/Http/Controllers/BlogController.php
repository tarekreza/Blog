<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['index']);
    // }

    // for show blog post
    public function index(Request $request)
    {
        //for search and pagination
        if ($request->search) {
            $posts = Post::where('title', 'like', '%' . $request->search . '%')->orWhere('body', 'like', '%' . $request->search . '%')->latest()->paginate(4);
        }
        elseif($request->category){
            $posts = Category::where('name', $request->category)->firstOrFail()->posts()->paginate(4)->withQueryString();//withQueryString for change page with page number
        }
        else{
            
            $posts = Post::latest()->paginate(4);
        }
        $categories = Category::all();
        return view('blogPosts.blog', compact('posts', 'categories'));
    }
    // for create single post
    public function create()
    {
        $categories = Category::all();
        return view('blogPosts.create-blog-post', compact('categories'));
    }
        // for store single post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required | image',
            'category_id' => 'required',
            'body' => 'required'
        ]);
        // add post id with slug for make it unique
        if (Post::latest()->first() !== null) {
            $postId = Post::latest()->first()->id +1;
        }
        else{
            $postId = 1;
        }

        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $slug = Str::slug($title, '-') . '-' . $postId;;
        $user_id = Auth::user()->id;
        $body = $request->input('body');

        // file upload
        $imagePath = 'storage/' . $request->file('image')->store('postsImages', 'public');

        $post = new Post();
        $post->title = $title;
        $post->category_id = $category_id;
        $post->slug = $slug;
        $post->user_id = $user_id;
        $post->imagePath = $imagePath;
        $post->body = $body;

        $post->save();

        return redirect()->back()->with('status', 'Post created successfully');
    }
        // for edit single post
    public function edit(Post $post)
    {
        if(auth()->user()->id !== $post->user->id){
            abort(403);
        }
        return view('blogPosts.edit-blog-post', compact('post'));
    }
        // for update single post
    public function update(Request $request , Post $post)
    {
        if(auth()->user()->id !== $post->user->id){
            abort(403);
        }
        $request->validate([
            'title' => 'required',
            'image' => 'required | image',
            'body' => 'required'
        ]);
        $postId = $post->id ;
        $title = $request->input('title');
        $slug = Str::slug($title, '-') . '-' . $postId;
        $body = $request->input('body');

        // file upload
        $imagePath = 'storage/' . $request->file('image')->store('postsImages', 'public');

        $post->title = $title;
        $post->slug = $slug;
        $post->imagePath = $imagePath;
        $post->body = $body;

        $post->save();

        return redirect()->back()->with('status', 'Post edited successfully');
    }
    // public function show($slug)
    // {
    //     $post = Post::where('slug', $slug)->first();
    //     return view('blogPosts.single-blog-post', compact('post'));
    // }

    // Route model binding
        // for show single post
    public function show(Post $post)
    {
        $category = $post->category;
        $relatedPosts = $category->posts()->where('id', '!=', $post->id)->latest()->take(3)->get();
        return view('blogPosts.single-blog-post', compact('post','relatedPosts'));
    }
    // for delete single post
    public function destroy(Post $post)
    {
       $post->delete();
       return redirect()->back()->with('status', 'Post delete successfully');
    }
}
