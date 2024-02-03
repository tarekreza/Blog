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
            <div class="">
                {{-- @foreach ($post->comments as $comment)
                    <div class="comment">
                        <p class="comment-author">{{ $comment->user->name }}</p>
                        <p class="comment-body">{{ $comment->body }}</p>
                    </div>
                @endforeach --}}
            </div>


            <form action="{{ route('comment.store', $post) }}" method="POST">
                @csrf
                <div class="w-full mb-4 border  rounded-lg bg-gray-700 border-gray-600">
                    <div class="px-4 py-2 rounded-t-lg bg-gray-800">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" name="comment" rows="4"
                            class="w-full px-0 text-sm   border-0 bg-gray-800  focus:ring-0 text-white placeholder-gray-400"
                            placeholder="Write a comment..." required></textarea>
                    </div>
                    <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                        <button type="submit"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Post comment
                        </button>
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
