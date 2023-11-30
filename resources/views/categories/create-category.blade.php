{{-- @extends('layout.layout') --}}

{{-- @section('head') --}}
{{-- for html editor --}}
{{-- <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script> --}}
{{-- @endsection --}}

{{-- @section('main') --}}


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create New Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <main class="container" style="background-color: #fff;">
                        <section id="contact-us">
                            {{-- contact form --}}
                            <div class="contact-form">
                                <form action="{{ route('categories.store') }}" method="post">
                                    @csrf
                                    {{-- name --}}
                                    <label for="name"><span>Name</span></label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" />
                                    {{-- name validation --}}
                                    @error('name')
                                        <p style="color: red; margin-bottom: 25px">{{ $message }}</p>
                                    @enderror

                                    {{-- Button --}}
                                    <input type="submit" value="submit" />
                                </form>
                            </div>
                            <div class="create-categories">
                                <a href="{{ route('categories.index') }}">Categories list <span>&#8594</span></a>
                            </div>
                        </section>
                    </main>


                </div>
            </div>
        </div>
</x-app-layout>
{{-- @endsection --}}
