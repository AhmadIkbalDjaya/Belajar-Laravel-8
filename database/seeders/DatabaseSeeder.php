<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\post;
use App\Models\User;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=> 'Ahmad Ikbal Djaya',
            'email'=> 'ikbaldjaya@gmail.com',
            'password'=> bcrypt('123')
        ]);

        User::create([
            'name'=> 'Andi Ahmad',
            'email'=> 'basma@gmail.com',
            'password'=> bcrypt('123')
        ]);

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        post::create([
            'title'=> 'Judul Pertama',
            'slug'=> 'judul-pertama',
            'excerpt'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto aliquam beatae porro explicabo in consequuntur
            recusandae asperiores sapiente, culpa excepturi nobis accusantium ipsa alias!',
            'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo dignissimos asperiores ex magnam ad quaerat cupiditate recusandae et mollitia natus officia voluptatem, velit atque temporibus eum voluptatum est, animi incidunt nemo laborum soluta repellendus similique id! Harum, a reprehenderit quibusdam magni facere, ipsam inventore vitae nulla velit molestiae, ipsum consectetur iusto asperiores. Tenetur repellat, laboriosam minima mollitia autem et beatae dignissimos tempora temporibus corporis, non harum fugiat assumenda cum rem, porro quasi ipsum suscipit voluptates alias quisquam quas dolor impedit dolores. Ab ea, quis exercitationem impedit ullam delectus neque veritatis, corporis tempora repellat velit quidem, at sit eos sapiente praesentium!',
            'category_id'=>1,
            'user_id'=>1
        ]);
        
        post::create([
            'title'=> 'Judul Kedua',
            'slug'=> 'judul-kedua',
            'excerpt'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto aliquam beatae porro explicabo in consequuntur
            recusandae asperiores sapiente, culpa excepturi nobis accusantium ipsa alias!',
            'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo dignissimos asperiores ex magnam ad quaerat cupiditate recusandae et mollitia natus officia voluptatem, velit atque temporibus eum voluptatum est, animi incidunt nemo laborum soluta repellendus similique id! Harum, a reprehenderit quibusdam magni facere, ipsam inventore vitae nulla velit molestiae, ipsum consectetur iusto asperiores. Tenetur repellat, laboriosam minima mollitia autem et beatae dignissimos tempora temporibus corporis, non harum fugiat assumenda cum rem, porro quasi ipsum suscipit voluptates alias quisquam quas dolor impedit dolores. Ab ea, quis exercitationem impedit ullam delectus neque veritatis, corporis tempora repellat velit quidem, at sit eos sapiente praesentium!',
            'category_id'=>1,
            'user_id'=>1
        ]);

        post::create([
            'title'=> 'Judul Ketiga',
            'slug'=> 'judul-ketiga',
            'excerpt'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto aliquam beatae porro explicabo in consequuntur
            recusandae asperiores sapiente, culpa excepturi nobis accusantium ipsa alias!',
            'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo dignissimos asperiores ex magnam ad quaerat cupiditate recusandae et mollitia natus officia voluptatem, velit atque temporibus eum voluptatum est, animi incidunt nemo laborum soluta repellendus similique id! Harum, a reprehenderit quibusdam magni facere, ipsam inventore vitae nulla velit molestiae, ipsum consectetur iusto asperiores. Tenetur repellat, laboriosam minima mollitia autem et beatae dignissimos tempora temporibus corporis, non harum fugiat assumenda cum rem, porro quasi ipsum suscipit voluptates alias quisquam quas dolor impedit dolores. Ab ea, quis exercitationem impedit ullam delectus neque veritatis, corporis tempora repellat velit quidem, at sit eos sapiente praesentium!',
            'category_id'=>2,
            'user_id'=>1
        ]);

        post::create([
            'title'=> 'Judul Empat',
            'slug'=> 'judul-empat',
            'excerpt'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto aliquam beatae porro explicabo in consequuntur
            recusandae asperiores sapiente, culpa excepturi nobis accusantium ipsa alias!',
            'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo dignissimos asperiores ex magnam ad quaerat cupiditate recusandae et mollitia natus officia voluptatem, velit atque temporibus eum voluptatum est, animi incidunt nemo laborum soluta repellendus similique id! Harum, a reprehenderit quibusdam magni facere, ipsam inventore vitae nulla velit molestiae, ipsum consectetur iusto asperiores. Tenetur repellat, laboriosam minima mollitia autem et beatae dignissimos tempora temporibus corporis, non harum fugiat assumenda cum rem, porro quasi ipsum suscipit voluptates alias quisquam quas dolor impedit dolores. Ab ea, quis exercitationem impedit ullam delectus neque veritatis, corporis tempora repellat velit quidem, at sit eos sapiente praesentium!',
            'category_id'=>2,
            'user_id'=>2
        ]);

    }
}
