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
            'name' => 'Rifqi Taufiqurrohman',
            'username' => 'rifqitaw',
            'email' => 'Rifqi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Taufiq',
        //     'email' => 'Taufiq@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Badminton',
            'slug' => 'Badminton'
        ]);

        Category::create([
            'name' => 'Football',
            'slug' => 'Football'
        ]);

        Category::create([
            'name' => 'Basket',
            'slug' => 'Basket'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, totam voluptatem. Excepturi libero at eligendi quas suscipit cumque! Vero, maxime.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum alias cupiditate modi perferendis eaque voluptate atque aliquid quibusdam dicta perspiciatis doloribus cumque maiores adipisci earum porro iste, consectetur inventore nemo tempore eligendi consequatur. Necessitatibus pariatur ipsa doloribus deleniti voluptatem fugit iste nesciunt error excepturi nulla neque ut quae aliquid dignissimos iusto, rerum veritatis rem facilis amet iure? Quis tenetur nostrum recusandae sit quos soluta facilis adipisci odio consequuntur, eum quibusdam, perferendis possimus nam animi expedita vitae nobis, nesciunt natus ratione obcaecati molestiae ducimus! Modi nemo minima nam exercitationem soluta, quas quis inventore nobis, id nesciunt nisi similique molestias eius! Ipsam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-Kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, totam voluptatem. Excepturi libero at eligendi quas suscipit cumque! Vero, maxime.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum alias cupiditate modi perferendis eaque voluptate atque aliquid quibusdam dicta perspiciatis doloribus cumque maiores adipisci earum porro iste, consectetur inventore nemo tempore eligendi consequatur. Necessitatibus pariatur ipsa doloribus deleniti voluptatem fugit iste nesciunt error excepturi nulla neque ut quae aliquid dignissimos iusto, rerum veritatis rem facilis amet iure? Quis tenetur nostrum recusandae sit quos soluta facilis adipisci odio consequuntur, eum quibusdam, perferendis possimus nam animi expedita vitae nobis, nesciunt natus ratione obcaecati molestiae ducimus! Modi nemo minima nam exercitationem soluta, quas quis inventore nobis, id nesciunt nisi similique molestias eius! Ipsam?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-Ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, totam voluptatem. Excepturi libero at eligendi quas suscipit cumque! Vero, maxime.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum alias cupiditate modi perferendis eaque voluptate atque aliquid quibusdam dicta perspiciatis doloribus cumque maiores adipisci earum porro iste, consectetur inventore nemo tempore eligendi consequatur. Necessitatibus pariatur ipsa doloribus deleniti voluptatem fugit iste nesciunt error excepturi nulla neque ut quae aliquid dignissimos iusto, rerum veritatis rem facilis amet iure? Quis tenetur nostrum recusandae sit quos soluta facilis adipisci odio consequuntur, eum quibusdam, perferendis possimus nam animi expedita vitae nobis, nesciunt natus ratione obcaecati molestiae ducimus! Modi nemo minima nam exercitationem soluta, quas quis inventore nobis, id nesciunt nisi similique molestias eius! Ipsam?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-Keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, totam voluptatem. Excepturi libero at eligendi quas suscipit cumque! Vero, maxime.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum alias cupiditate modi perferendis eaque voluptate atque aliquid quibusdam dicta perspiciatis doloribus cumque maiores adipisci earum porro iste, consectetur inventore nemo tempore eligendi consequatur. Necessitatibus pariatur ipsa doloribus deleniti voluptatem fugit iste nesciunt error excepturi nulla neque ut quae aliquid dignissimos iusto, rerum veritatis rem facilis amet iure? Quis tenetur nostrum recusandae sit quos soluta facilis adipisci odio consequuntur, eum quibusdam, perferendis possimus nam animi expedita vitae nobis, nesciunt natus ratione obcaecati molestiae ducimus! Modi nemo minima nam exercitationem soluta, quas quis inventore nobis, id nesciunt nisi similique molestias eius! Ipsam?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
