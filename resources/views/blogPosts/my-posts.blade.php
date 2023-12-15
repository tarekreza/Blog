{{-- @extends('layout.layout')
@section('head') --}}
<!-- Css -->

{{-- @endsection --}}
{{-- @section('main') --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="categories-list">
                        {{-- <h1>Categories List</h1> --}}
                        {{-- @include('includes.flash-message') --}}
                        @include('includes.flash-message')



                        <div class="flex justify-end">

                            <p class="duration-300 hover:-translate-y-1 "><a href="{{ route('blog.create') }}"
                                    class=" p-3 bg-black text-white rounded-lg text-sm">New
                                    post</a></p>
                        </div>

                        <table class="table-auto w-full my-8">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Title</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr class="mb-4">
                                        <td class="border px-4 py-2">{{ $post->title }}</td>
                                        <td class="border px-4 py-2">

                                            <a href="{{ route('blog.show', $post) }}"
                                                class="mr-2 text-blue-500 hover:text-blue-800">Show</a>
                                            <a href="{{ route('blog.edit', $post->id) }}"
                                                class="text-blue-500 hover:text-blue-800">Edit</a>
                                            <form action="{{ route('blog.destroy', $post->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-500 hover:text-red-800">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- @endsection --}}
