<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\category;
use App\Models\products;
use App\Models\image;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        category::factory(10)->create()->each(
            function(category $category){
                echo $category->id;
            }
        );

        // image::factory(10)->create();

        products::factory(10)->create();

    }
}
