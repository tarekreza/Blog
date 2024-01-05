<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Create Category',
            'group_name' => 'Category',
        ]);

        Permission::create([
            'name' => 'Edit Category',
            'group_name' => 'Category',
        ]);

        Permission::create([
            'name' => 'View Category',
            'group_name' => 'Category',
        ]);

        Permission::create([
            'name' => 'Delete Category',
            'group_name' => 'Category',
        ]);

        Permission::create([
            'name' => 'Create Role',
            'group_name' => 'Role',
        ]);
        Permission::create([
            'name' => 'Edit Role',
            'group_name' => 'Role',
        ]);
        Permission::create([
            'name' => 'View Role',
            'group_name' => 'Role',
        ]);
        Permission::create([
            'name' => 'Delete Role',
            'group_name' => 'Role',
        ]);

        Permission::create([
            'name' => 'Create User',
            'group_name' => 'User',
        ]);
        Permission::create([
            'name' => 'Edit User',
            'group_name' => 'User',
        ]);
        Permission::create([
            'name' => 'View User',
            'group_name' => 'User',
        ]);
        Permission::create([
            'name' => 'Delete User',
            'group_name' => 'User',
        ]);
    }
}
