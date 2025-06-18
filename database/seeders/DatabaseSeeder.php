<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\category;
use App\Models\products;
use App\Models\image;
use App\Models\posts;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Pest\Laravel\post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        posts::factory(78)->create()->each(
            function(posts $post){
                image::factory()->create([
                    'imageable_id'=>$post->id,
                    'imageable_type'=>posts::class
                ]);
            }
        );
        category::factory(10)->create();
        products::factory(50)->create()->each(
            function(products $product){
                image::factory(3)->create([
                    'imageable_id'=>$product->id,
                    'imageable_type'=>products::class
                ]);
            }
        );

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // category::factory(10)->create()->each(
        //     function(category $category){
        //         echo $category->id;
        //     }
        // );

        // image::factory(10)->create();

        // products::factory(10)->create();

    }
}
