{{-- @extends('layout.layout') --}}

{{-- @section('head') --}}
{{-- for html editor --}}
{{-- @endsection --}}

{{-- @section('main') --}}


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create New Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <main class="container" style="background-color: #fff;">
                        <section id="contact-us">

                            @include('includes.flash-message')
                            {{-- contact form --}}
                            <div class="contact-form">
                                <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    {{-- Title --}}
                                    <label for="title"><span>Title</span></label>
                                    <input type="text" id="title" name="title" value="{{ old('title') }}" />
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
                                    <!-- Drop down -->
                                    <label for="categories"><span>Choose a category:</span></label>
                                    <select name="category_id" id="categories">
                                        <option selected disabled>Select option </option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        {{-- The $attributeValue field is/must be $validationRule --}}
                                        <p style="color: red; margin-bottom:25px;">{{ $message }}</p>
                                    @enderror
                                    {{-- Body --}}
                                    <label for="body"><span>Body</span></label>
                                    <textarea id="body" name="body">{{ old('body') }}</textarea>
                                    {{-- body validation --}}
                                    @error('body')
                                        <p style="color: red; margin-bottom: 25px">{{ $message }}</p>
                                    @enderror

                                    {{-- Button --}}
                                    <input style="margin-top: 16px" type="submit" value="Submit" />
                                </form>
                            </div>
                        </section>
                    </main>


                </div>
            </div>
        </div>
        {{-- for html editor --}}
        <script>
            CKEDITOR.replace('body');
        </script>
</x-app-layout>
{{-- @endsection --}}

{{-- @section('scripts') --}}
{{-- for html editor --}}

{{-- @endsection --}}
