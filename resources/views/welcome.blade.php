@extends('layout.layout')
<!-- header -->
@section('header')

<header class="header" style="background-image: url({{ asset("images/home.jpg") }});">
  <div class="header-text">
    <h1>Dev Dynamo Sphere</h1>
    <h4>Fueling Your Journey in Tech and Personal Development...</h4>
  </div>
  <div class="overlay"></div>
</header>

@endsection
<!-- sidebar -->

<!-- main -->
@section('main')

<main class="container">
  <h2 class="header-title">Latest Blog Posts</h2>
  <section class="cards-blog latest-blog">
    @foreach ($posts as $post)
          
        <div class="card-blog-content">
          <img class="sm:h-96 h-72  w-full object-cover" src="{{ asset('storage/'.$post->imagePath) }}" alt="" />
          <p>
            {{ $post->created_at->diffForHumans() }}
            <span>Written By {{ $post->user->name }}</span>
          </p>
          <h4>
            <a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>
          </h4>
        </div>
        
        @endforeach
  </section>
</main>

@endsection
<!-- Main footer -->