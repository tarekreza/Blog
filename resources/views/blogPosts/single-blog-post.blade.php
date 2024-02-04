@extends('layout.layout')
<!-- main -->
@section('main')

    <main class="container">
        <section class="single-blog-post">
            <h1>{{ $post->title }}</h1>

            <p class="time-and-author">
                {{ $post->created_at->diffForHumans() }}
                <span>Written By {{ $post->user->name }}</span>
            </p>

            <div class="single-blog-post-ContentImage" data-aos="fade-left">
                <img src="{{ asset('storage/' . $post->imagePath) }}" alt="" />
            </div>

            <div class="about-text" id="postBody">
                <p>
                    {!! $post->body !!}
                </p>
            </div>
        </section>
        <section class="recommended">
            <p>Related</p>
            <div class="recommended-cards">

                @foreach ($relatedPosts as $relatedPost)
                    <a href="{{ route('blog.show', $relatedPost) }}">
                        <div class="recommended-card">
                            <img src="{{ asset('storage/' . $relatedPost->imagePath) }}" alt="" loading="lazy" />
                            <h4>
                                {{ $relatedPost->title }}
                            </h4>
                        </div>
                    </a>
                @endforeach

            </div>
        </section>

        <section class="mx-auto w-3/5 ">
            <h2>{{ $post->comments->count() }} Comments</h2>
            <hr class="mb-4">
            @foreach ($post->comments->sortByDesc('created_at') as $comment)
                <article>
                    <div class="flex items-center mb-4">
                        <img class="w-10 h-10 mr-4 rounded-full" src="{{ asset('storage/profilePictures/avatar.jpg') }}"
                            alt="">
                        <div class="font-medium text-white">
                            <p>{{ $comment->user->name }} <time datetime=""
                                    class="block text-sm text-gray-400">Joined on
                                    {{ $comment->user->created_at->format('F Y') }}</time></p>
                        </div>
                    </div>
                    <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                        <p class=" text-gray-400">{{ $comment->body }}</p>
                    </div>
                    
                    @if(Auth::check() && (Auth::user()->id == $comment->user_id || Auth::user()->hasRole('Admin')))
                        <form class="flex items-center justify-end mb-2 text-red-500" method="POST" action="{{ route('comment.destroy', $comment) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    @endif
                </article>
            @endforeach






            <form action="{{ route('comment.store', $post) }}" method="POST">
                @csrf
                <div class="w-full mb-4   rounded-lg bg-zinc-700">
                    <div class="px-4 py-2 rounded-t-lg bg-zinc-900">
                        <textarea id="comment" name="comment" rows="4"
                            class="w-full px-0 text-sm   border-0 bg-zinc-900  focus:ring-0 text-white placeholder-gray-400"
                            placeholder="Write a comment..." required></textarea>
                    </div>
                    <div class="flex items-center justify-between px-3 py-2 border-t border-gray-600">
                        @if (Auth::check())
                            <button type="submit"
                                class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-black rounded-lg focus:ring-4 focus:ring-blue-900 hover:bg-zinc-900">
                                Post comment
                            </button>
                        @else
                            <button type="submit"
                                class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-black rounded-lg focus:ring-4 focus:ring-blue-900 hover:bg-zinc-900">
                                Login First
                            </button>
                        @endif



                    </div>
                </div>
            </form>
            @error('comment')
                <p class="ms-auto text-sm text-red-500">{{ $message }}</p>
            @enderror


    </main>

@section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Find all anchor tags within the post body
            var postBody = document.getElementById("postBody");
            var anchorTags = postBody.getElementsByTagName("a");

            // Apply underline style to each anchor tag
            for (var i = 0; i < anchorTags.length; i++) {
                anchorTags[i].style.textDecoration = "underline";
            }
        });
    </script>
@endsection

@endsection
