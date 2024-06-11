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
        

        User::create([
            'name' => 'Iqbal Saimina',
            'username' => 'iqbalsaimina',
            'email' => 'iqbalsborneo@gmail.com',
            'password' => bcrypt('kadatahujua')
        ]);

        // User::create([
        //     'name' => 'Firmansyah',
        //     'email' => 'firmansyah@gmail.com',
        //     'password' => bcrypt('789lupasaya')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vitae fuga qui quis non, consectetur veniam et aperiam rem,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vitae fuga qui quis non, consectetur veniam et aperiam rem, veritatis earum magnam beatae cum vel nesciunt magni voluptatibus aliquid! Itaque eligendi deserunt modi voluptas ipsum quasi at accusantium nobis vero exercitationem nam dolore mollitia officia dicta ad, blanditiis odit illo asperiores ut temporibus inventore perspiciatis dignissimos. Optio repellendus ullam magni. Dolor necessitatibus, molestias aperiam delectus ad natus accusantium vel dolorum repellendus earum asperiores, repellat, voluptates sequi hic ut totam facilis ducimus ea doloribus ipsa distinctio blanditiis. Iste ab, consequuntur, unde minus neque accusantium explicabo tenetur blanditiis facilis quidem optio et?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vitae fuga qui quis non, consectetur veniam et aperiam rem,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vitae fuga qui quis non, consectetur veniam et aperiam rem, veritatis earum magnam beatae cum vel nesciunt magni voluptatibus aliquid! Itaque eligendi deserunt modi voluptas ipsum quasi at accusantium nobis vero exercitationem nam dolore mollitia officia dicta ad, blanditiis odit illo asperiores ut temporibus inventore perspiciatis dignissimos. Optio repellendus ullam magni. Dolor necessitatibus, molestias aperiam delectus ad natus accusantium vel dolorum repellendus earum asperiores, repellat, voluptates sequi hic ut totam facilis ducimus ea doloribus ipsa distinctio blanditiis. Iste ab, consequuntur, unde minus neque accusantium explicabo tenetur blanditiis facilis quidem optio et?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vitae fuga qui quis non, consectetur veniam et aperiam rem,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vitae fuga qui quis non, consectetur veniam et aperiam rem, veritatis earum magnam beatae cum vel nesciunt magni voluptatibus aliquid! Itaque eligendi deserunt modi voluptas ipsum quasi at accusantium nobis vero exercitationem nam dolore mollitia officia dicta ad, blanditiis odit illo asperiores ut temporibus inventore perspiciatis dignissimos. Optio repellendus ullam magni. Dolor necessitatibus, molestias aperiam delectus ad natus accusantium vel dolorum repellendus earum asperiores, repellat, voluptates sequi hic ut totam facilis ducimus ea doloribus ipsa distinctio blanditiis. Iste ab, consequuntur, unde minus neque accusantium explicabo tenetur blanditiis facilis quidem optio et?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vitae fuga qui quis non, consectetur veniam et aperiam rem,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor vitae fuga qui quis non, consectetur veniam et aperiam rem, veritatis earum magnam beatae cum vel nesciunt magni voluptatibus aliquid! Itaque eligendi deserunt modi voluptas ipsum quasi at accusantium nobis vero exercitationem nam dolore mollitia officia dicta ad, blanditiis odit illo asperiores ut temporibus inventore perspiciatis dignissimos. Optio repellendus ullam magni. Dolor necessitatibus, molestias aperiam delectus ad natus accusantium vel dolorum repellendus earum asperiores, repellat, voluptates sequi hic ut totam facilis ducimus ea doloribus ipsa distinctio blanditiis. Iste ab, consequuntur, unde minus neque accusantium explicabo tenetur blanditiis facilis quidem optio et?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
