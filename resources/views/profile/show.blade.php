@extends('layout.layout')
<!-- main -->
@section('main')
    <main class="container">
        <!-- profile section -->
        <section class="flex justify-center mt-10">
            <!--Profile card-->
            <div class="w-full max-w-sm p-3  border rounded-lg shadow bg-zinc-900 border-zinc-700">
                <div class="flex flex-col items-center pb-10">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="{{ asset('storage/' . $user->profile_picture_path) }}" alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-white">{{ $user->name }}</h5>
                    <span class="text-sm text-gray-400">{{ $user->bio }}</span>
                </div>
            </div>
        </section>

        <!-- blog posts section -->
        <h2 class="mt-10 mb-5 text-3xl font-bold text-white">Blog Posts</h2>
        <section class="flex justify-center lg:justify-start flex-wrap ">
            @forelse ($user->posts as $post)
                <div class="max-w-sm mr-3 mb-3  border  rounded-lg shadow bg-zinc-900 border-zinc-700">
                    <a href="{{ route('blog.show', $post->slug) }}">
                        <img class="w-full h-48 object-cover rounded-t-lg " src="{{ asset('storage/' . $post->imagePath) }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ route('blog.show', $post->slug) }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight  text-white">{{ $post->title }}</h5>
                        </a>
                        <p class=" font-normal  text-gray-400">{!! Str::words($post->body, 20, '...') !!}</p>
                        <a href="{{ route('blog.show', $post->slug) }}"
                            class="inline-flex items-center mt-5 py-2.5 px-4 text-xs font-medium text-center text-white bg-black rounded-lg focus:ring-4 focus:ring-blue-900 hover:bg-zinc-700">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @empty
            @endforelse

        </section>
    </main>
@endsection
