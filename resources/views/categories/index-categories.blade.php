{{-- @extends('layout.layout')
@section('head') --}}
<!-- Css -->

{{-- @endsection --}}
{{-- @section('main') --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categories
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


                        @can('Create Category')
                        <div class="flex justify-end">
                            
                            <p class="duration-300 hover:-translate-y-1 "><a href="{{ route('categories.create') }}"
                                class=" p-3 bg-black text-white rounded-lg text-sm">Create
                                category</a></p>
                            </div>
                            @endcan
                            
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td class="border px-4 py-2">{{ $category->name }}</td>
                                    <td class="border px-4 py-2 flex justify-center gap-1">
                                        @can('Edit Category')
                                        <a href="{{ route('categories.edit', $category) }}"
                                            class="px-3 py-2 hover:opacity-80 bg-green-600 text-white rounded-lg text-sm">Edit</a>
                                        @endcan
                                        @can('Delete Category')
                                        <form action="{{ route('categories.destroy', $category) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <input type="submit" value="Delete"
                                                class="px-3 py-2 hover:opacity-80 bg-red-600 text-white rounded-lg text-sm cursor-pointer">
                                        </form>
                                        @endcan
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
