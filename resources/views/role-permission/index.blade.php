<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Roles List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="categories-list">
                        @include('includes.flash-message')


                        @can('Create Role')
                            <div class="flex justify-end">

                                <p class="duration-300 hover:-translate-y-1 "><a
                                        href="{{ route('role-permission.showAllRolesAndPermissions') }}"
                                        class=" p-3 bg-black text-white rounded-lg text-sm">Create Role</a></p>
                            </div>
                        @endcan

                        <table class="table-auto w-full mt-3">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Role</th>
                                    <th class="px-4 py-2">Permissions</th>
                                    <th class="px-4 py-2">Actions</th> <!-- Add the Actions column -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $role->name }}</td>
                                        <td class="border px-4 py-2">
                                            @foreach ($role->permissions as $permission)
                                                <span
                                                    class="bg-gray-200 rounded-full px-2 py-1 text-xs font-semibold text-gray-700 mr-2">{{ $permission->name }}</span>
                                            @endforeach
                                        </td>
                                        <td class="border px-4 py-2">

                                            @can('Edit Role')
                                                <a href="{{ route('role-permission.edit', $role->id) }}"
                                                    class="text-blue-500 hover:text-blue-700">Edit</a>
                                            @endcan
                                            @can('Delete Role')
                                                <form action="{{ route('role-permission.destroy', $role->id) }}"
                                                    method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="text-red-500 hover:text-red-700">Delete</button>
                                                    <!-- Add the Delete button -->
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
