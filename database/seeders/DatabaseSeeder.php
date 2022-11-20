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
        

        // User::create([
        //     'name' => 'Wahyu',
        //     'email' => 'sugengwahyn@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Nugrah',
        //     'email' => 'nugrah@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga dolorem minus deleniti hic harum consequatur tempora, consectetur perspiciatis ratione officia minima non nihil libero asperiores eum excepturi eos porro, saepe culpa earum. Dolore quibusdam hic perspiciatis exercitationem tempora perferendis modi quasi! Et voluptatum dolorum deserunt iusto laborum dolore nostrum possimus at rerum voluptate ipsa quaerat doloremque officiis sequi magnam perspiciatis repudiandae fugiat, eveniet nihil aliquid repellat tempore molestias? Dignissimos eum cupiditate officia aliquam. Maiores culpa accusamus eveniet reiciendis omnis repudiandae id ipsa sed, consectetur iste veniam numquam officiis impedit mollitia quas cum praesentium reprehenderit est vero illo tenetur dolorum at.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga dolorem minus deleniti hic harum consequatur tempora, consectetur perspiciatis ratione officia minima non nihil libero asperiores eum excepturi eos porro, saepe culpa earum. Dolore quibusdam hic perspiciatis exercitationem tempora perferendis modi quasi! Et voluptatum dolorum deserunt iusto laborum dolore nostrum possimus at rerum voluptate ipsa quaerat doloremque officiis sequi magnam perspiciatis repudiandae fugiat, eveniet nihil aliquid repellat tempore molestias? Dignissimos eum cupiditate officia aliquam. Maiores culpa accusamus eveniet reiciendis omnis repudiandae id ipsa sed, consectetur iste veniam numquam officiis impedit mollitia quas cum praesentium reprehenderit est vero illo tenetur dolorum at.',
        //     'category_id' => 1,
        //     'user_id' => 1


        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga dolorem minus deleniti hic harum consequatur tempora, consectetur perspiciatis ratione officia minima non nihil libero asperiores eum excepturi eos porro, saepe culpa earum. Dolore quibusdam hic perspiciatis exercitationem tempora perferendis modi quasi! Et voluptatum dolorum deserunt iusto laborum dolore nostrum possimus at rerum voluptate ipsa quaerat doloremque officiis sequi magnam perspiciatis repudiandae fugiat, eveniet nihil aliquid repellat tempore molestias? Dignissimos eum cupiditate officia aliquam. Maiores culpa accusamus eveniet reiciendis omnis repudiandae id ipsa sed, consectetur iste veniam numquam officiis impedit mollitia quas cum praesentium reprehenderit est vero illo tenetur dolorum at.',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);
        
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga dolorem minus deleniti hic harum consequatur tempora, consectetur perspiciatis ratione officia minima non nihil libero asperiores eum excepturi eos porro, saepe culpa earum. Dolore quibusdam hic perspiciatis exercitationem tempora perferendis modi quasi! Et voluptatum dolorum deserunt iusto laborum dolore nostrum possimus at rerum voluptate ipsa quaerat doloremque officiis sequi magnam perspiciatis repudiandae fugiat, eveniet nihil aliquid repellat tempore molestias? Dignissimos eum cupiditate officia aliquam. Maiores culpa accusamus eveniet reiciendis omnis repudiandae id ipsa sed, consectetur iste veniam numquam officiis impedit mollitia quas cum praesentium reprehenderit est vero illo tenetur dolorum at.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
