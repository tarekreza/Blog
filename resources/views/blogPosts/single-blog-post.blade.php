@extends('layout.layout')
@section('head')
    <title>{{ $post->title }}</title>
    <meta name="description" content="{!! Str::limit($post->body, 20, '...') !!}">
    {{-- <meta name="description" content="{{ $post->excerpt }}"> --}}
    <meta property="og:title" content="{{ $post->title }}" />
    <meta property="og:description" content="{!! Str::limit($post->body, 20, '...') !!}" />
    <meta property="og:image" content="{{ asset('storage/' . $post->imagePath) }}" />
    <meta property="og:url" content="{{ Request::fullUrl() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Blog" />
    <meta property="og:locale" content="en_US" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@yourtwitterhandle" />
    <meta name="twitter:creator" content="@yourtwitterhandle" />
    <meta name="twitter:title" content="{{ $post->title }}" />
    <meta name="twitter:description" content="{!! Str::limit($post->body, 20, '...') !!}" />
    <meta name="twitter:image" content="{{ asset('storage/' . $post->imagePath) }}" />
    
    @endsection
<!-- main -->
@section('main')

    <main class="container">
        <section class="single-blog-post">
            <h1>{{ $post->title }}</h1>

            <p class="time-and-author">
                {{ $post->created_at->diffForHumans() }}
                <span>Written By <a href="{{ route('profile.show',$post->user) }}">{{ $post->user->name }}</a></span>
            </p>

            <div class="single-blog-post-ContentImage" data-aos="fade-left">
                <img src="{{ asset('storage/' . $post->imagePath) }}" alt="" />
            </div>

            <div class="about-text" id="postBody">
                <p>
                    {!! $post->body !!}
                </p>
                <hr>
                <p>Share on: </p>
                <div class="flex">
                <!-- Facebook Share Button -->
                <a class="mr-3" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0,0,256,256">
                        <g fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,256v-256h256v256z" id="bgRectangle"></path></g><g fill="#fffdfd" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M41,4h-32c-2.76,0 -5,2.24 -5,5v32c0,2.76 2.24,5 5,5h32c2.76,0 5,-2.24 5,-5v-32c0,-2.76 -2.24,-5 -5,-5zM37,19h-2c-2.14,0 -3,0.5 -3,2v3h5l-1,5h-4v15h-5v-15h-4v-5h4v-3c0,-4 2,-7 6,-7c2.9,0 4,1 4,1z"></path></g></g>
                        </svg>
                    </a>
                
                <!-- Twitter Share Button -->
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}&text={{ urlencode($post->title) }}" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px" height="30px" viewBox="0,0,256,256">
                        <g fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,256v-256h256v256z" id="bgRectangle"></path></g><g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.33333,5.33333)"><path d="M12.5,6c-3.584,0 -6.5,2.916 -6.5,6.5v23c0,3.584 2.916,6.5 6.5,6.5h23c3.584,0 6.5,-2.916 6.5,-6.5v-23c0,-3.584 -2.916,-6.5 -6.5,-6.5zM13.82813,14h6.4375l4.85742,6.94336l6.01367,-6.94336h2l-7.11133,8.23438l8.23242,11.76563h-6.4375l-5.34961,-7.64844l-6.60547,7.64844h-2.04297l7.74219,-8.94336zM16.93555,15.69531l11.65234,16.60938h2.5625l-11.65234,-16.60938z"></path></g></g>
                        </svg>
                </a>
                </div>
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

        <section class="mx-auto w-11/12 lg:w-3/5 md:w-4/5 sm:w-4/5">
            <h2>{{ $post->comments->count() }} Comments</h2>
            <hr class="mb-4">
            @foreach ($post->comments->sortByDesc('created_at') as $comment)
                <article>
                    <div class="flex items-center mb-4">
                        <img class="w-10 h-10 mr-4 rounded-full" src="{{ asset('storage/'.$comment->user->profile_picture_path) }}"
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
                            class="w-full px-0 text-sm h-28   border-0 bg-zinc-900  focus:ring-0 text-white placeholder-gray-400"
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
