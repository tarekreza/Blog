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
        $this->call(CategoryTableSeeder::class);
        $user = User::updateOrCreate([
            'name' => 'Tarek',
            'email' => 'admin@gmail.com',
            'bio' => 'I am a web developer',
            'profile_picture_path' => 'profilePictures/avatar.jpg',
            // password is already hashed in User model
            'password' => '11111111',
        ]);
        $user->assignRole('Admin');
        $this->call(PostTableSeeder::class);
    }
}
