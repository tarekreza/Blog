<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit User
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="categories-list">
                        @include('includes.flash-message')
                        <form action="{{ route('users.update',$user) }}" method="post">
                            @csrf
                            @method('PUT')
                            {{-- name --}}
                            <label for="name"><span>Name</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name',$user->name) }}"
                                class="w-full border-gray-300 rounded" />
                            {{-- name validation --}}
                            @error('name')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror

                            <label for="email" class="mt-4 inline-block"><span>Email</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email',$user->email) }}"
                                class="w-full border-gray-300 rounded" />

                            @error('email')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror

                            <label for="password" class="mt-4 inline-block"><span>Password</span></label>
                            <input type="text" id="password" name="password"
                                class="w-full border-gray-300 rounded" />

                            @error('password')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror

                            <label for="roles" class="mt-4 inline-block"><span>Choose a role:</span></label>
                            <select style="margin-bottom: 0" name="role" id="roles">
                                <option selected disabled>Select role </option>
                                @foreach ($roles as $role)
                                    <option @if ($user->roles->pluck('name')->contains($role->name)) selected @endif
                                    value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror

                            <!-- Submit button -->
                            <button type="submit"
                                class="mt-4 px-3 py-2 bg-black text-white rounded-lg text-sm duration-300 hover:-translate-y-1 ">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
