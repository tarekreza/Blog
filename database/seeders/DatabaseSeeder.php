<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $user = User::updateOrCreate([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            // password is already hashed in User model
            'password' => '11111111',
        ]);
        $user->assignRole('Admin');
    }
}
