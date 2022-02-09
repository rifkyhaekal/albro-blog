<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
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
        

        User::create([
            'name' => 'Rifky Haekal Al-Fadillah',
            'username' => 'rifkyhaekal',
            'email' => 'haekalhaekal001@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Nabil Ramdhani',
        //     'email' => '177006036@student.unsil.ac.id',
        //     'password' => bcrypt('12345')
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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta reprehenderit rerum recusandae dolor autem quo laboriosam ratione, reiciendis fuga distinctio a. Incidunt nesciunt distinctio molestias maxime officiis id consequatur, error dolore odio provident, labore obcaecati ad impedit!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta reprehenderit rerum recusandae dolor autem quo laboriosam ratione, reiciendis fuga distinctio a. Incidunt nesciunt distinctio molestias maxime officiis id consequatur, error dolore odio provident, labore obcaecati ad impedit!</p>
        //     <p>Tempora pariatur ex cumque quos unde tenetur porro, consectetur neque atque soluta! Facilis cum magni ducimus! Optio tenetur tempore vitae. Quibusdam magni minus veritatis deserunt quae eius ad molestiae minima? Est, voluptate iusto ipsa dolorum quas ex hic aliquam minima dignissimos natus, distinctio voluptatibus cumque voluptas perspiciatis officiis modi illo voluptatum qui. Facere accusantium quas minima reprehenderit voluptates. Officiis cumque commodi totam aperiam quod blanditiis, dolorem voluptate ipsam doloremque nesciunt fuga sit, exercitationem deleniti molestias asperiores repellat repudiandae nemo odio, eius perspiciatis iusto?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta reprehenderit rerum recusandae dolor autem quo laboriosam ratione, reiciendis fuga distinctio a. Incidunt nesciunt distinctio molestias maxime officiis id consequatur, error dolore odio provident, labore obcaecati ad impedit!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta reprehenderit rerum recusandae dolor autem quo laboriosam ratione, reiciendis fuga distinctio a. Incidunt nesciunt distinctio molestias maxime officiis id consequatur, error dolore odio provident, labore obcaecati ad impedit!</p>
        //     <p>Tempora pariatur ex cumque quos unde tenetur porro, consectetur neque atque soluta! Facilis cum magni ducimus! Optio tenetur tempore vitae. Quibusdam magni minus veritatis deserunt quae eius ad molestiae minima? Est, voluptate iusto ipsa dolorum quas ex hic aliquam minima dignissimos natus, distinctio voluptatibus cumque voluptas perspiciatis officiis modi illo voluptatum qui. Facere accusantium quas minima reprehenderit voluptates. Officiis cumque commodi totam aperiam quod blanditiis, dolorem voluptate ipsam doloremque nesciunt fuga sit, exercitationem deleniti molestias asperiores repellat repudiandae nemo odio, eius perspiciatis iusto?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta reprehenderit rerum recusandae dolor autem quo laboriosam ratione, reiciendis fuga distinctio a. Incidunt nesciunt distinctio molestias maxime officiis id consequatur, error dolore odio provident, labore obcaecati ad impedit!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta reprehenderit rerum recusandae dolor autem quo laboriosam ratione, reiciendis fuga distinctio a. Incidunt nesciunt distinctio molestias maxime officiis id consequatur, error dolore odio provident, labore obcaecati ad impedit!</p>
        //     <p>Tempora pariatur ex cumque quos unde tenetur porro, consectetur neque atque soluta! Facilis cum magni ducimus! Optio tenetur tempore vitae. Quibusdam magni minus veritatis deserunt quae eius ad molestiae minima? Est, voluptate iusto ipsa dolorum quas ex hic aliquam minima dignissimos natus, distinctio voluptatibus cumque voluptas perspiciatis officiis modi illo voluptatum qui. Facere accusantium quas minima reprehenderit voluptates. Officiis cumque commodi totam aperiam quod blanditiis, dolorem voluptate ipsam doloremque nesciunt fuga sit, exercitationem deleniti molestias asperiores repellat repudiandae nemo odio, eius perspiciatis iusto?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta reprehenderit rerum recusandae dolor autem quo laboriosam ratione, reiciendis fuga distinctio a. Incidunt nesciunt distinctio molestias maxime officiis id consequatur, error dolore odio provident, labore obcaecati ad impedit!',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta reprehenderit rerum recusandae dolor autem quo laboriosam ratione, reiciendis fuga distinctio a. Incidunt nesciunt distinctio molestias maxime officiis id consequatur, error dolore odio provident, labore obcaecati ad impedit!</p>
        //     <p>Tempora pariatur ex cumque quos unde tenetur porro, consectetur neque atque soluta! Facilis cum magni ducimus! Optio tenetur tempore vitae. Quibusdam magni minus veritatis deserunt quae eius ad molestiae minima? Est, voluptate iusto ipsa dolorum quas ex hic aliquam minima dignissimos natus, distinctio voluptatibus cumque voluptas perspiciatis officiis modi illo voluptatum qui. Facere accusantium quas minima reprehenderit voluptates. Officiis cumque commodi totam aperiam quod blanditiis, dolorem voluptate ipsam doloremque nesciunt fuga sit, exercitationem deleniti molestias asperiores repellat repudiandae nemo odio, eius perspiciatis iusto?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
