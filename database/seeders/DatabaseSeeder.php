<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // User::create([
        //     'name' => 'Lutfi Faiz Ziyadatullah',
        //     'email' => 'lutfifaizziyadatullah@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Xaviera Putri Ardianingsih Listyo',
        //     'email' => 'xavieraaputri@gmail.com',
        //     'password' => bcrypt('67890')
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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit fugit repudiandae repellendus cum quidem libero quae a praesentium facilis eum nulla aspernatur veniam asperiores nisi quo qui ullam,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit fugit repudiandae repellendus cum quidem libero quae a praesentium facilis eum nulla aspernatur veniam asperiores nisi quo qui ullam, commodi labore illum id? Repellat optio quibusdam est nihil quis voluptate necessitatibus a consequuntur, recusandae quisquam iusto repellendus sint numquam praesentium officia sapiente architecto quia nesciunt hic quas beatae. Culpa, dolorum accusamus a eum voluptas molestiae nulla. Aut, dolorem corrupti. Omnis accusamus similique velit quidem ducimus aperiam harum, quos soluta mollitia facere deserunt porro eos, corporis inventore possimus itaque minus cumque accusantium veniam voluptas laborum repellendus repellat! Ipsam nulla ullam necessitatibus magnam.',
        //     'category_id' => 1,
        //     'user_id' => 1 
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit fugit repudiandae repellendus cum quidem libero quae a praesentium facilis eum nulla aspernatur veniam asperiores nisi quo qui ullam,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit fugit repudiandae repellendus cum quidem libero quae a praesentium facilis eum nulla aspernatur veniam asperiores nisi quo qui ullam, commodi labore illum id? Repellat optio quibusdam est nihil quis voluptate necessitatibus a consequuntur, recusandae quisquam iusto repellendus sint numquam praesentium officia sapiente architecto quia nesciunt hic quas beatae. Culpa, dolorum accusamus a eum voluptas molestiae nulla. Aut, dolorem corrupti. Omnis accusamus similique velit quidem ducimus aperiam harum, quos soluta mollitia facere deserunt porro eos, corporis inventore possimus itaque minus cumque accusantium veniam voluptas laborum repellendus repellat! Ipsam nulla ullam necessitatibus magnam.',
        //     'category_id' => 1,
        //     'user_id' => 1 
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit fugit repudiandae repellendus cum quidem libero quae a praesentium facilis eum nulla aspernatur veniam asperiores nisi quo qui ullam,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit fugit repudiandae repellendus cum quidem libero quae a praesentium facilis eum nulla aspernatur veniam asperiores nisi quo qui ullam, commodi labore illum id? Repellat optio quibusdam est nihil quis voluptate necessitatibus a consequuntur, recusandae quisquam iusto repellendus sint numquam praesentium officia sapiente architecto quia nesciunt hic quas beatae. Culpa, dolorum accusamus a eum voluptas molestiae nulla. Aut, dolorem corrupti. Omnis accusamus similique velit quidem ducimus aperiam harum, quos soluta mollitia facere deserunt porro eos, corporis inventore possimus itaque minus cumque accusantium veniam voluptas laborum repellendus repellat! Ipsam nulla ullam necessitatibus magnam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    
    }
}
