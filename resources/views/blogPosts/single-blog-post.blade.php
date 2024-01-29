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
                            <img src="{{ asset($relatedPost->imagePath) }}" alt="" loading="lazy" />
                            <h4>
                                {{ $relatedPost->title }}
                            </h4>
                        </div>
                    </a>
                @endforeach

            </div>
        </section>
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
