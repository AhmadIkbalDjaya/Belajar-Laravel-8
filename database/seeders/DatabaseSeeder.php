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
        User::create([
            'name'=>'Ahmad Ikbal Djaya',
            'username' => 'ikbalDjaya',
            'email' => 'ikbaldjaya@gmail.com',
            'password' => bcrypt('password')
        ]);
        
        User::factory(3)->create();
        post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);

        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);
        
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        

    }
}
