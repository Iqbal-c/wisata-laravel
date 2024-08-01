<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EventSeeder::class
        ]);

        User::create([
            'name' => 'Iqbal Saimina',
            'username' => 'iqbalsaimina',
            'email' => 'iqbalsborneo@gmail.com',
            'password' => bcrypt('kadaingat')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Wisata Alam',
            'slug' => 'wisata-alam'
        ]);

        Category::create([
            'name' => 'Wisata Buatan',
            'slug' => 'wisata-buatan'
        ]);

        Category::create([
            'name' => 'Wisata Religi',
            'slug' => 'wisata-religi'
        ]);

        Post::factory(20)->create();

        
    }
}
