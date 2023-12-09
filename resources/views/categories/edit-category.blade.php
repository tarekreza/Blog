{{-- @extends('layout.layout') --}}

{{-- @section('head') --}}
{{-- for html editor --}}
{{-- <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script> --}}
{{-- @endsection --}}

{{-- @section('main') --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">



                    <main class="container" style="background-color: #fff;">
                        <div class="flex justify-end">

                            <p class="duration-300 hover:-translate-y-1 "><a href="{{ route('categories.index') }}"
                                    class=" p-3 bg-black text-white rounded-lg text-sm">Categories list</a></p>
                        </div>
                        <section id="contact-us">

                            @include('includes.flash-message')
                            {{-- contact form --}}
                            <div class="contact-form">
                                <form action="{{ route('categories.update', $category) }}" method="post">
                                    @csrf
                                    @method('put')
                                    {{-- name --}}
                                    <label for="name"><span>Name</span></label>
                                    <input type="text" id="name" name="name" value="{{ $category->name }}" />
                                    {{-- name validation --}}
                                    @error('name')
                                        <p style="color: red; margin-bottom: 25px">{{ $message }}</p>
                                    @enderror

                                    {{-- Button --}}
                                    <input type="submit" value="submit" />
                                </form>
                            </div>
                        </section>
                    </main>


                </div>
            </div>
        </div>
</x-app-layout>
{{-- @endsection --}}
