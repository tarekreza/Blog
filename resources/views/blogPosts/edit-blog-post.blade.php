@extends('layout.layout')

@section('head')
{{-- for html editor --}}
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@endsection

@section('main')
<main class="container" style="background-color: #fff;">
    <section id="contact-us">
        <h1 style="padding-top: 50px;">Edit Post!</h1>

        @include('includes.flash-message')
        {{-- contact form --}}
        <div class="contact-form">
            <form action="{{ route('blog.update', $post) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                {{-- Title --}}
                <label for="title"><span>Title</span></label>
                <input type="text" id="title" name="title" value="{{ $post->title }}" />
                {{-- title validation --}}
                @error('title')
                <p style="color: red; margin-bottom: 25px">{{ $message }}</p>
                @enderror

                {{-- Image --}}
                <label for="image"><span>Image</span></label>
                <input type="file" id="image" name="image" />
                {{-- image validation --}}
                @error('image')
                <p style="color: red; margin-bottom: 25px">{{ $message }}</p>
                @enderror

                {{-- Body --}}
                <label for="body"><span>Body</span></label>
                <textarea id="body" name="body">{{ $post->body }}</textarea>
                {{-- body validation --}}
                @error('body')
                <p style="color: red; margin-bottom: 25px">{{ $message }}</p>
                @enderror

                {{-- Button --}}
                <input type="submit" value="submit" />
            </form>
        </div>
    </section>
</main>
@endsection

@section('scripts')
{{-- for html editor --}}
<script>
    CKEDITOR.replace( 'body' );
</script>
@endsection