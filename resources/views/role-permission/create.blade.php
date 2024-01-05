<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Role
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="categories-list">
                        @include('includes.flash-message')
                        <form action="{{ route('role-permission.addPermissionToRole') }}" method="post">
                            @csrf
                            {{-- role name --}}
                            <label for="name"><span>Name</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                class="w-full border-gray-300 rounded" />
                            {{-- name validation --}}
                            @error('name')
                                <p class="text-red-500 mb-6">{{ $message }}</p>
                            @enderror


                            @foreach ($permissions as $group => $groupPermissions)
                                <div class="flex mt-3 w-full">
                                    <!-- Display permissions checkboxes -->
                                    <div class="w-3/12 ">
                                        <h4 class=" text-lg">{{ $group }} :</h4>
                                    </div>
                                    <div class="w-3/4 ">
                                        @foreach ($groupPermissions as $permission)
                                            <input type="checkbox" id="permission_{{ $permission->id }}"
                                                name="permissions[]" value="{{ $permission->id }}">
                                            <label
                                                for="permission_{{ $permission->id }}" class="mr-4">{{ $permission->name }}</label>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                            @error('permissions')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror

                            <!-- Submit button -->
                            <button type="submit"
                                class="mt-4 px-3 py-2 bg-black text-white rounded-lg text-sm duration-300 hover:-translate-y-1 ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
