@extends('layout.layout')
<!-- main -->
@section('main')

<main class="container">
  <h2 class="header-title">All Blog Posts</h2>
  
  @include('includes.flash-message')
  <div class="searchbar">
    <form action="">
      <input type="text" placeholder="Search..." name="search" />

      <button type="submit">
        <i class="fa fa-search"></i>
      </button>

    </form>
  </div>
  <div class="categories">
    <ul>
      @foreach ($categories as $category)
      <li><a href="{{ route('blog.index', ['category' => $category->name]) }}">{{ $category->name }}</a></li>
        
      @endforeach
    </ul>
  </div>
  <section class="cards-blog latest-blog">

    @forelse ($posts as $post)
    {{-- if there is no post in $post then execute @empty --}}
    <div class="card-blog-content">
      @auth
      @if (auth()->user()->id === $post->user->id)
      <div class="post-buttons">
        <a href="{{ route('blog.edit', $post) }}">Edit</a>
        <form action="{{ route('blog.destroy', $post) }}" method="post">
          @csrf
          @method('delete')
          <input type="submit" value="Delete">
        </form>
      </div>
      @endif
      @endauth

      <img src="{{ asset($post->imagePath) }}" alt="" />
      <p>
        {{ $post->created_at->diffForHumans() }}
        <span>Written By {{ $post->user->name }}</span>
      </p>
      <h4>
        <a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>
      </h4>
    </div>

    @empty

    <p>Sorry, currently there is no blog post related to that search!</p>

    @endforelse

  </section>
</main>
<!-- pagination -->

{{-- php artisan vendor:publish --tag=laravel-pagination  --for copy file on view folder and change style --}}

{{ $posts->links('pagination::default') }}

<br>
@endsection