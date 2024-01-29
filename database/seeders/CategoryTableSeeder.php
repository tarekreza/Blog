<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            "Technology",
            "Health",
            "Travel",
            "DIY and Crafts",
            "Book Reviews",
            "Career",
            "Entrepreneurship",
            "Personal Development",
            "Food and Cooking",
        ];


        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
